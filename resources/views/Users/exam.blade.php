@extends('layouts/head')
<link rel="stylesheet" href="{{asset('css/user/exam.css')}}"/>
<div class="row">
    <div class="col-2" style="padding: 0">
        @include('dasboard.user.menu')
    </div>
    <div class="col-10" style="padding: 0">
        <x-navbar title="Bài kiểm tra năng lực"></x-navbar>
        <div class="container-main">
            <div class="row justify-content-between">
                <div class="pdf-container col-7">
                    <div class="row justify-content-center">
                        <iframe src="{{ asset('files/2304.10177.pdf') }}"  height="1000px">
                        </iframe>
                    </div>
                </div>
                <div class="answer-container col-5">
                    <div class="d-flex align-items-center py-1">
                        <h3>Thời gian làm bài: </h3>
                        <div id="countdown"></div>
                    </div>

                    <script>

                        var targetTime = new Date();
                        targetTime.setHours(targetTime.getHours() + 1);


                        var countdownInterval = setInterval(function() {
                            var currentTime = new Date();
                            var timeDifference = targetTime - currentTime;

                            if (timeDifference <= 0) {
                                clearInterval(countdownInterval);
                                document.getElementById('countdown').innerHTML = 'Countdown expired!';
                            } else {
                                var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                                var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                                document.getElementById('countdown').innerHTML = hours + 'h ' + minutes + 'm ' + seconds + 's';
                            }
                        }, 1000);
                    </script>
                    <div class="row container-quiz">
                        <div class="col-6">
                            <div class="quiz my-3">
                                <div class="d-flex justify-content-between answers-box align-items-center">
                                    <h4 style="color: red">1</h4>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            A
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            B
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            C
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            D
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="quiz my-3">
                                <div class="d-flex justify-content-between answers-box align-items-center">
                                    <h4 style="color: red">1</h4>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            A
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            B
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            C
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            D
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="btn btn-primary  btn-lg btn-block my-3">Nộp bài</div>

                </div>
            </div>
        </div>
    </div>
</div>

