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
                                    <a class="dropdown-item" href="{{route('portfolio.create')}}">Create</a>
                                    <a class="dropdown-item" href="/admin/portfolio">Another action</a>
                                    <a class="dropdown-item" href="/admin/portfolio">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mb-0">Portfolio</h5>
                    </div>


                    <div class="card-body">
                        <table id="datatables-clients" class="table table-striped" style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Teachnologies</th>
                                <th>Link</th>
                                <th>Tag</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($portfolio as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->technologies}}</td>
                                    <td>{{$item->link}}</td>
                                    <td>{{\Illuminate\Support\Facades\DB::table('tags')->find($item->tags)->title}}</td>
                                    <td>
                                        <img src='{{asset("admin/img/portfolio/$item->image")}}' width="32" height="32"
                                             class="rounded-circle my-n1" alt="Avatar">
                                    </td>
                                    <td>
                                        <form action="{{route('portfolio.destroy', $item->id)}}" method="post"
                                              style="display: inline-block">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="submit" class="btn btn-danger" value="Delete">
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
