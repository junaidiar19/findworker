<?php 
    function rpSingkat($n, $presisi=1) {
        if ($n < 900) {
            $format_angka = number_format($n, $presisi);
            $simbol = '';
        } else if ($n < 900000) {
            $format_angka = number_format($n / 1000, $presisi);
            $simbol = 'rb';
        } else if ($n < 900000000) {
            $format_angka = number_format($n / 1000000, $presisi);
            $simbol = 'jt';
        } else if ($n < 900000000000) {
            $format_angka = number_format($n / 1000000000, $presisi);
            $simbol = 'M';
        } else {
            $format_angka = number_format($n / 1000000000000, $presisi);
            $simbol = 'T';
        }
    
        if ( $presisi > 0 ) {
            $pisah = '.' . str_repeat( '0', $presisi );
            $format_angka = 'Rp. ' . str_replace( $pisah, '', $format_angka );
        }
        
        return $format_angka . $simbol;
    }

    function availableColor($value) {
        $color = ['primary', 'success', 'secondary', 'violet', 'danger'];
        $count = count($color);

        for($i = 0; $i < $count; $i++) {
            $idx = ($value-1 + $i) % $count;
            return $color[$idx];
        }
    }

    function levelColor($value) {
        if($value == 'Fresher') {
            return 'primary';
        } else if($value == 'Intermediate') {
            return 'success';
        } else if($value == 'Pro') {
            return 'violet';
        } else if($value == 'Expert') {
            return 'danger';
        }
    }
?>