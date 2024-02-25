@extends('admin.masterAdmin')
@section('content')

<!-- BEGIN: Page heading-->
<div class="page-heading">
                        <div class="page-breadcrumb">
                            <h1 class="page-title page-title-sep">Bootstrap Inputs</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="la la-home font-20"></i></a></li>
                                <li class="breadcrumb-item">Forms</li>
                                <li class="breadcrumb-item">Bootstrap Inputs</li>
                            </ol>
                        </div>
                    </div><!-- BEGIN: Page content-->
                    <div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-fullheight">
                                    <div class="card-body">
                                        <h5 class="box-title text-primary">FORM CONTROLS</h5>
                                        <p class="mb-5 text-muted">Textual form controls—like <code>&lt;input&gt;</code>s, <code>&lt;select&gt;</code>s, and <code>&lt;textarea&gt;</code>s—are styled with the <code>.form-control</code> class. Included are styles for general appearance, focus state, sizing, and more.</p>
                                        <form>
                                            <div class="form-group mb-4"><label for="exampleInputEmail1">Email address</label><input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"><small class="form-text text-muted" id="emailHelp">We'll never share your email with anyone else.</small></div>
                                            <div class="form-group mb-4"><label for="exampleInputPassword1">Password</label><input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password"></div>
                                            <div class="form-group mb-4"><label for="exampleInputRounded1">Rounded input</label><input class="form-control form-control-rounded" id="exampleInputRounded1" type="text" placeholder="Rounded input"></div>
                                            <div class="form-group mb-4"><label>Example select</label><select class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select></div>
                                            <div class="form-group mb-4"><label>Example multiple select</label><select class="form-control" multiple="">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select></div>
                                            <div class="form-group"><label>Example textarea</label><textarea class="form-control" rows="3"></textarea></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div><!-- END: Page content-->

@endsection