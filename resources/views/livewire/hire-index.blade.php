<div>
    <div class="section-bg h-120 py-4">
        <div class="container">
            <h5>Temukan worker</h5>
        </div>
    </div>

    <div class="container py-5">

        <div class="row">
            <div class="col-md-3">

                <div class="sticky">
                    <h6 class="mb-4">Available to</h6>
                    @foreach ($available as $e)
                    <label for="available-{{ $loop->iteration }}" class="checkbox-wrap checkbox-orange">{{ $e->name }}
                        <input type="checkbox" id="available-{{ $loop->iteration }}">
                        <span class="checkmark"></span>
                    </label>
                    @endforeach

                    <br>

                    <h6 class="mb-4">Experience Level</h6>
                    @foreach ($experience as $e)
                    <label for="experience-{{ $loop->iteration }}" class="checkbox-wrap checkbox-orange">{{ $e->name }}
                        <input type="checkbox" id="experience-{{ $loop->iteration }}">
                        <span class="checkmark"></span>
                    </label>
                    @endforeach
                </div>

            </div>
            <div class="col-md-9">
                <p class="text-muted text-sm">Showing 65 Results</p>

                <div class="card rounded-lg card-hover">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex">
                                    <div class="flex-shrink">
                                        <img src="https://randomuser.me/api/portraits/men/36.jpg" class="avatar avatar-lg rounded-circle me-3 border p-1" alt="">
                                    </div>
                                    <div class="my-auto">
                                        <h6 class="mb-0 text-dark">Senior Web Developer</h6>
                                        <div class="d-flex">
                                            <p class="text-sm text-muted mb-0 me-3">Stevan Pasaribu</p>
                                            <p class="text-sm text-muted mb-0"> <i class="bi bi-geo-alt" aria-hidden="true"></i> Kota Banjarmasin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 text-md-end text-left mb-3">
                                <span class="p-2 rounded-md me-1 badge badge-light-danger">Expert</span>
                            </div>
                        </div>
                        

                        <p class="text-gray text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vel eos reiciendis laudantium illum autem sunt recusandae optio distinctio at doloremque assumenda ducimus alias voluptates, consequatur nostrum voluptatem perferendis consequuntur!</p>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <p class="fw-semibold text-dark text-sm mb-2">Availability</p>
                                {{-- <p class="text-sm">Full Time, Contract Project</p> --}}
                                <span class="p-2 rounded-md me-1 badge badge-light-primary">Full Time</span>
                                <span class="p-2 rounded-md me-1 badge badge-light-success">Contract Project</span>

                            </div>
                            <div class="col-md-6 mb-3">
                                <p class="fw-semibold text-dark text-sm mb-2">Salary Range</p>
                                <div class="d-flex text-sm text-dark">
                                    <span>Rp. 5jt</span>
                                    <span class="mx-2">-</span>
                                    <span>Rp. 10jt</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-9 mb-3 mb-md-0">
                                <p class="fw-semibold text-dark text-sm mb-2">Skills</p>
                                <span class="p-2 rounded-md me-1 badge badge-light-secondary">React JS</span>
                                <span class="p-2 rounded-md me-1 badge badge-light-secondary">Laravel</span>
                                <span class="p-2 rounded-md me-1 badge badge-light-secondary">Node JS</span>
                                <span class="p-2 rounded-md me-1 badge badge-light-secondary">Tailwind CSS</span>
                                <span class="p-2 rounded-md me-1 badge badge-light-secondary">MySQL</span>
                            </div>
                            <div class="col-md-3 text-end">
                                <button class="btn btn-orange rounded-md text-sm mt-3 shadow"><i class="bi bi-send-check me-1"></i> Hire Me</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
