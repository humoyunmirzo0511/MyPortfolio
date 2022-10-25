<x-admin>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions float-end">
                            <div class="dropdown position-relative">
                                <a href="/admin/portfolio" data-bs-toggle="dropdown" data-bs-display="static">
                                    <i class="align-middle" data-feather="more-horizontal"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createSkills">Create</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mb-0">Skills</h5>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="createSkills" tabindex="-1" aria-labelledby="createSkillsLabel"
                         aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form action="{{route('skills.store')}}" method="post">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="createSkillsLabel">Create Skill</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="percent" class="form-label">Percentage</label>
                                            <input type="number" class="form-control" id="percent" name="percent">
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                        </button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="card-body">
                        <table id="datatables-clients" class="table table-striped" style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Percentage</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($skills as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->percent}}</td>
                                    <td>
                                        <form action="{{route('skills.destroy', $item->id)}}" method="post"
                                              style="display: inline-block">
                                            @csrf
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="id" value="{{$item->id}}">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-admin>
