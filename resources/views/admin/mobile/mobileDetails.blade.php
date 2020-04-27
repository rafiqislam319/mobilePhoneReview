@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Product Details</h4>
                </div>
                <div class="panel-body">

                    <table class="table table-bordered">
                        <tr>
                            <th>Mobile Name</th>
                            <th>{{ $mobile->mobile_name }}</th>
                        </tr>

{{--                        <tr>--}}
{{--                            <th>Brand Name</th>--}}
{{--                            <th></th>--}}
{{--                        </tr>--}}

                        <tr>
                            <th>Mobile Image</th>
                            <th>
                                <img src="{{asset($mobile->file)}}" alt="img" height="300" width="300">
                            </th>
                        </tr>
                        <tr>
                            <th>Mobile Price</th>
                            <th>{{ $mobile->price }}</th>
                        </tr>
                        <tr>
                            <th>Mobile Model</th>
                            <th>{{ $mobile->model  }}</th>
                        </tr>
                        <tr>
                            <th>Mobile Color</th>
                            <th>{{ $mobile->color  }}</th>
                        </tr>
                        <tr>
                            <th>Launch date</th>
                            <th>{{ $mobile->launch_date }}</th>
                        </tr>

                        <tr>
                            <th>Network Type</th>
                            <th>{{ $mobile->network_type  }}</th>
                        </tr>
                        <tr>
                            <th>SIM</th>
                            <th>{{ $mobile->sim  }}</th>
                        </tr>
                        <tr>
                            <th>GPRS</th>
                            <th>{{ $mobile->gprs}}</th>
                        </tr>
                        <tr>
                            <th>Edge</th>
                            <th>{{ $mobile->edge  }}</th>
                        </tr>
                        <tr>
                            <th>WLAN</th>
                            <th>{{ $mobile->wlan  }}</th>
                        </tr>
                        <tr>
                            <th>Bluetooth</th>
                            <th>{{ $mobile->bluetooth  }}</th>
                        </tr>
                        <tr>
                            <th>GPS</th>
                            <th>{{ $mobile->gps  }}</th>
                        </tr>
                        <tr>
                            <th>Fm Radio</th>
                            <th>{{ $mobile->fm_radio  }}</th>
                        </tr>
                        <tr>
                            <th>USB</th>
                            <th>{{ $mobile->usb  }}</th>
                        </tr>
                        <tr>
                            <th>Display Size</th>
                            <th>{{ $mobile->display_size  }}</th>
                        </tr>
                        <tr>
                            <th>Display Feature</th>
                            <th>{{ $mobile->display_feature  }}</th>
                        </tr>
                        <tr>
                            <th>Display Resolution</th>
                            <th>{{ $mobile->display_resolution  }}</th>
                        </tr>
                        <tr>
                            <th>Display Screen Protection</th>
                            <th>{{ $mobile->display_protection  }}</th>
                        </tr>
                        <tr>
                            <th>Body Dimension</th>
                            <th>{{ $mobile->body_dimension  }}</th>
                        </tr>
                        <tr>
                            <th>Body Weight</th>
                            <th>{{ $mobile->body_weight  }}</th>
                        </tr>
                        <tr>
                            <th>Primary Camera</th>
                            <th>{{ $mobile->p_camera  }}</th>
                        </tr>
                        <tr>
                            <th>Primary Camera Feature</th>
                            <th>{{ $mobile->p_camera_feature  }}</th>
                        </tr>
                        <tr>
                            <th>Secondary Camera</th>
                            <th>{{ $mobile->s_camera  }}</th>
                        </tr>
                        <tr>
                            <th>Secondary Camera Feature</th>
                            <th>{{ $mobile->s_camera_feature  }}</th>
                        </tr>
                        <tr>
                            <th>video_recording</th>
                            <th>{{ $mobile->video_recording  }}</th>
                        </tr>
                        <tr>
                            <th>Operating System</th>
                            <th>{{ $mobile->os  }}</th>
                        </tr>
                        <tr>
                            <th>OS Version</th>
                            <th>{{ $mobile->os_version  }}</th>
                        </tr>
                        <tr>
                            <th>CPU</th>
                            <th>{{ $mobile->cpu  }}</th>
                        </tr>
                        <tr>
                            <th>ROM</th>
                            <th>{{ $mobile->rom  }}</th>
                        </tr>
                        <tr>
                            <th>External Memory</th>
                            <th>{{ $mobile->e_memory  }}</th>
                        </tr>
                        <tr>
                            <th>RAM</th>
                            <th>{{ $mobile->ram }}</th>
                        </tr>
                        <tr>
                            <th>Audio</th>
                            <th>{{ $mobile->audio  }}</th>
                        </tr>
                        <tr>
                            <th>Loud Speaker</th>
                            <th>{{ $mobile->l_speaker  }}</th>
                        </tr>
                        <tr>
                            <th>Battery Type</th>
                            <th>{{ $mobile->battery_type  }}</th>
                        </tr>
                        <tr>
                            <th>Battery capacity</th>
                            <th>{{ $mobile->battery_capacity  }}</th>
                        </tr>
                        <tr>
                            <th>Finger Print</th>
                            <th>{{ $mobile->finger_print  }}</th>
                        </tr>
                        <tr>
                            <th>Face Unlock</th>
                            <th>{{ $mobile->face_unlock  }}</th>
                        </tr>
                        <tr>
                            <th>Made IN</th>
                            <th>{{ $mobile->made_in  }}</th>
                        </tr>

                        <tr>
                            <th>Publication Status</th>
                            <th>{{ $mobile->publication_status }}</th>
                        </tr>
                        <tr>
                            <th>Short Description</th>
                            <th>{{ $mobile->short_description }}</th>
                        </tr>
                        <tr>
                            <th>Long Description</th>
                            <td>{{ $mobile->highlights }}</td>
                        </tr>

                    </table>


                </div>

            </div>

        </div>
    </div>

@endsection

