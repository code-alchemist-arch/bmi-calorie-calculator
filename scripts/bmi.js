var baseBmiCategories = [
    ["underweight", [0, 18]],
    ["healthy weight", [18.1, 23.0]],
    ["overweight", [23.1, 28.0]],
    ["obese", [28.1, 37.9]],
    ["morbidly obese", [38.0, 100]],
];

const activitiyLevels = {
    "lightlyActive": 1.25, 
    "moderatelyActive": 1.38, 
    "active": 1.52, 
    "veryActive": 1.65
};

var activityLevel = "";

$(document).ready(function() {
    var activityLevelRadios = document.querySelectorAll('input[name="activityLevel"]');
    activityLevelRadios.forEach(function(radio) {
      radio.addEventListener('change', function() {
        activityLevel = this.value;
      });
    });
});

function changeHeightUnit() {
    var heightUnit = $("#heightUnit").val();
    if (heightUnit === "ftinch") {
        $("#height1").attr("placeholder", "ft");
        $("#height2").show();
    } else {
        $("#height1").attr("placeholder", "cm");
        $("#height1").val('');
        $("#height2").hide();
    }
}

function calculateBMI() {
    var sex = $("#sex").val();
    var age = $("#age").val();
    var height1 = $("#height1").val();
    var height2 = $("#height2").val();
    var weight = $("#weight").val();
    var heightUnit = $("#heightUnit").val();
    var weightUnit = $("#weightUnit").val();
    
    var realWeight = weightUnit === 'lbs' ? weight * 0.453592 : weight;
    var realHeight = heightUnit === 'ftinch' ? height1 * 30.48 + height2 * 2.54: height1;
    
    if (!sex || !age || !height1 || !weight) {
        alert("Please fill in all the required fields");
        return;
    }
    
    var bmi = Math.round(realWeight * 10 / Math.pow(realHeight / 100, 2)) / 10;
    renderIndicators(sex === 'male' ? 1 : 0, age, realHeight, realWeight, bmi);
}

function renderIndicators(sex = 0, age = 0, height = 0, weight, bmi = 0) {
    var bmiCategories = JSON.parse(JSON.stringify(baseBmiCategories));
    var weightLabels = [];
    var idealWeights = [];

    for (var i = 0 ; i < bmiCategories.length ; i ++) {
        var isLast = i + 1 === bmiCategories.length;
        var category = bmiCategories[i];
        var shift = sex + (age > 20 ? Math.floor((age - 20) / 10) : 0);
        if (category[1][0]) category[1][0] += shift;
        if (category[1][1]) category[1][1] += shift;
        var rangeLabel = isLast ? category[1][0] + " +" : category[1].join(' ~ ');
        $(".bmi-category_range:nth-child(" + (i + 1) + ") .value").html("<b>" + category[0] +"</b>" + "<br>" + rangeLabel);
        
        var value = category[1][1];
        if (i + 2 === bmiCategories.length) {
            value = bmiCategories[i + 1][1][0] + shift;
        }
        var weightLabel = value * Math.pow(height / 100, 2);
        if (!isLast) {
            $(".bmi-category_range:nth-child(" + (i + 1) + ") .weight").html((weightLabel / 0.453592).toFixed(1) + " lbs<br>(" + weightLabel.toFixed(1) + " kg)") ;
        }

        if (bmi >= category[1][0] && bmi <= category[1][1]) {
            idealWeights[0] = weightLabels.pop().toFixed(1);
            idealWeights[1] = weightLabel.toFixed(1);
            var basePercent = i * 20;
            var relPercent = (bmi - category[1][0]) * 20 / (category[1][1] - category[1][0]);
            $('.bmi-result_indicator').css('left', (basePercent + relPercent) + '%');
        }
        weightLabels.push(weightLabel);
    }
    var idealWeightsLbs = idealWeights.map(weight => (weight / 0.453592).toFixed(1));
    $(".bmi-result .value").text(bmi);
    $('.bmi-result_summary .result .value').text(bmi);
    $('.bmi-result_summary .current .value').html((weight / 0.453592).toFixed(1) + " lbs<br>(" + weight.toFixed(1) + ' kg)');
    $('.bmi-result_summary .ideal .value').html(idealWeightsLbs.join(" ~ ") + " lbs<br>(" + idealWeights.join(' ~ ') + ' kg)');
}

function calculateCalorie() {
    var sex = $("#sex").val();
    var age = $("#age").val();
    var height1 = $("#height1").val();
    var height2 = $("#height2").val();
    var weight = $("#weight").val();
    var heightUnit = $("#heightUnit").val();
    var weightUnit = $("#weightUnit").val();
    
    var realWeight = weightUnit === 'lbs' ? weight * 0.453592 : weight;
    var realHeight = heightUnit === 'ftinch' ? height1 * 30.48 + height2 * 2.54: height1;
    
    if (!sex || !age || !height1 || !weight || !activityLevel) {
        alert("Please fill in all the required fields");
        return;
    }

    let bmr;
	if (sex === 'male') {
        bmr = 10 * realWeight + 6.25 * realHeight - 5 * age + 5;
	} else {
		bmr = 10 * realWeight + 6.25 * realHeight - 5 * age - 161;
	}
		
	bmr = Math.round(Math.round(bmr * activitiyLevels[activityLevel]) / 10) * 10;
	let loseMin = bmr - 370;
	let gainMin = bmr + 280;

    $('.calorie-intake .lose .value').text([loseMin, loseMin + 100].join(' ~ ') + " cal");
    $('.calorie-intake .maintain .value').text([bmr - 90, bmr + 110].join(' ~ ') + " cal");
    $('.calorie-intake .gain .value').text([gainMin, gainMin + 200].join(' ~ ') + " cal");
}
