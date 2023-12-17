<link rel="stylesheet" href="<?php echo $host;?>/style/bmi.css"></link>
<h2>BMI Calculator</h2>
<div class="container bmi-section">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="bmi-tab" data-toggle="tab" href="#bmi" role="tab" aria-controls="bmi" aria-selected="true">Body Mass Index </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="calorie-tab" data-toggle="tab" href="#calorie" role="tab" aria-controls="calorie" aria-selected="false">Daily Calorie Intake</a>
        </li>
    </ul>
    <br>
    <div id="bmiForm">
        <div class="row">
            <div class="col-md-6">
                <label for="sex">Sex:</label>
                <select class="form-control" id="sex">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <label for="height">Height:</label>
                <div class="input-group">
                    <input type="number" class="form-control" id="height1" placeholder="feet">
                    <input type="number" class="form-control" id="height2" placeholder="inch">
                    <select class="custom-select" id="heightUnit" onchange="changeHeightUnit()">
                        <option value="ftinch">ft/inch</option>
                        <option value="cm">cm</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <label for="weight">Weight:</label>
                <div class="input-group">
                    <input type="number" class="form-control" id="weight">
                    <select class="custom-select" id="weightUnit">
                        <option value="lbs">lbs</option>
                        <option value="kg">kg</option>
                    </select>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12 tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="bmi" role="tabpanel" aria-labelledby="bmi-tab">
                    <br>
                    <button type="button" class="btn btn-primary" onclick="calculateBMI()">Calculate BMI</button>
                    <br>
                    <div class="bmi-indicator">
                        <div class="bmi-result_indicator">
                            <div class="bmi-result">
                                <div>Your BMI</div>
                                <div class="value"></div>
                            </div>
                        </div>
                        <div class="bmi-categories">
                            <div class="bmi-category_range">
                                <div class="value"></div>
                                <div class="weight"></div>
                            </div>
                            <div class="bmi-category_range">
                                <div class="value"></div>
                                <div class="weight"></div>
                            </div>
                            <div class="bmi-category_range">
                                <div class="value"></div>
                                <div class="weight"></div>
                            </div>
                            <div class="bmi-category_range">
                                <div class="value"></div>
                                <div class="weight"></div>
                            </div>
                            <div class="bmi-category_range">
                                <div class="value"></div>
                                <div class="weight"></div>
                            </div>
                        </div>
                        <div class="bmi-result_summary">
                            <div class="result">
                                <div class="title">Your personal BMI</div>
                                <div class="value"></div>
                            </div>
                            <div class="current">
                                <div class="title">Your current weight</div>
                                <div class="value"></div>
                            </div>
                            <div class="ideal">
                                <div class="title">Your ideal weight range</div>
                                <div class="value"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 tab-pane fade" id="calorie" role="tabpanel" aria-labelledby="calorie-tab">
                    <div class="activity-level">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="activityLevel" id="lightlyActive" value="lightlyActive">
                            <label class="form-check-label" for="lightlyActive">Lightly active</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="activityLevel" id="moderatelyActive" value="moderatelyActive">
                            <label class="form-check-label" for="moderatelyActive">Moderately active</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="activityLevel" id="active" value="active">
                            <label class="form-check-label" for="active">Active</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="activityLevel" id="veryActive" value="veryActive">
                            <label class="form-check-label" for="veryActive">Very Active</label>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button type="button" class="btn btn-primary" onclick="calculateCalorie()">Calculate Calorie intake</button>
                    </div>
                    <br>
                    <div class="calorie-intake">
                        <div class="lose">
                            <div class="title">Lose weight</div>
                            <div class="value"></div>
                        </div>
                        <div class="maintain">
                            <div class="title">Maintain weight</div>
                            <div class="value"></div>
                        </div>
                        <div class="gain">
                            <div class="title">Gain weight</div>
                            <div class="value"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo $host;?>/scripts/bmi.js"></script>