@extends('admin.master')
@section('title')
    Mobile add
@endsection

@section('body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Add Mobile Info</h4>
                </div>
                <div class="panel-body">
                    <form action="{{route('save-mobilePhone')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-4">Brand Name</label>
                            <div class="col-md-8 bg-warning">
                                <select class="form-control" name="brand_id">
                                    <option>---- Select Brand Name -----</option>
                                    @foreach($brands as $brand)
                                    <option value="{{$brand->id}}"> {{$brand->brand_name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Mobile Name</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="mobile_name" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Model</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="model" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Color</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="color" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Price</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="price" class="form-control1"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Launch Date</label>
                            <div class="col-md-8 bg-warning">
                                <input type="date" name="launch_date" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Network Type</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="network_type" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">SIM</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="sim" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">GPRS</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="gprs" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Edge</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="edge" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">WLAN</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="wlan" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Bluetooth</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="bluetooth" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">GPS</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="gps" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">FM Radio</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="fm_radio" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">USB</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="usb" class="form-control1"/>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-4">Display Size</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="display_size" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Display Feature</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="display_feature" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Display Resolution</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="display_resolution" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Display Screen Protection</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="display_protection" class="form-control1"/>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-4">Body Dimension</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="body_dimension" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Body weight</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="body_weight" class="form-control1"/>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-4">Primary Camera</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="p_camera" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Primary Camera Feature</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="p_camera_feature" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Secondary Camera</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="s_camera" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Secondary Camera Feature</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="s_camera_feature" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Video Recording</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="video_recording" class="form-control1"/>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-4">Operating System</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="os" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">OS Version</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="os_version" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">CPU</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="cpu" class="form-control1"/>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-4">Rom</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="rom" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">External Memory</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="e_memory" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">RAM</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="ram" class="form-control1"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Audio</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="audio" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Loud Speaker</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="l_speaker" class="form-control1"/>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-4">Battery Type</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="battery_type" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Battery Capacity</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="battery_capacity" class="form-control1"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Finger Print</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="finger_print" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Face Unlock</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="face_unlock" class="form-control1"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Made In</label>
                            <div class="col-md-8 bg-warning">
                                <input type="text" name="made_in" class="form-control1"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Short Description</label>
                            <div class="col-md-8 bg-warning">
                                <textarea name="short_description" class="form-control1"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Highlights</label>
                            <div class="col-md-8 bg-warning">
                                <textarea name="highlights" id="editor" class="form-control1"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Mobile Image</label>
                            <input type="file" name="file[]">
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Publication Status</label>
                            <div class="col-md-8 bg-warning">
                                <label><input type="radio" name="publication_status" value="1"/> Published</label>
                                <label><input type="radio" name="publication_status" value="0"/> Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-lg-offset-4 bg-info">
                                <input type="submit" name="btn" class="form-control1 btn btn-success1 btn-block" value="Save Mobile Info"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


