var app = angular.module('myApp', []);
app.controller('MyCtrl', ['$scope', '$interval', function($scope, $interval) {
$scope.cfB = function(url){
console.log(url);
    var r = confirm("Are you sure ? You want Delete user.");
      if (r == true) {
      window.location.href = "edituser.php?edit="+url;
      }
    };
    $scope.data = [];
    $scope.JSONmonth = [];
    $scope.date = new Date();
    $scope.startSaturn = 3;
    $scope.startSun = 4;
    $scope.type = 1;
    $scope.outputDetail = "การลาป่วย";
    $scope.dayOfMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    $scope.nameOfMonth = ["January", "Feburary", "March", "April", "May", "June", "July", "August", "September", "October", "Nomvember", "December"];
    $scope.nameOfWork = [{
        "work": "การลาป่วย",
        "type": "1"
    }, {
        "work": "การลากิจ",
        "type": "2"
    }, {
        "work": "การลาพักร้อน",
        "type": "3"
    }];
    $interval(function() {
        $scope.date = new Date();
    }, 1000);
    $scope.strDetail = function(name, type) {
        $scope.outputDetail = name;
        $scope.type = type;
    };
    $scope.numberDate1 = [];
    for (var i = 1; i <= 31; i++) {
        var JSONnumberDate = {
            day: i
        };
        $scope.numberDate1.push(JSONnumberDate);
    }
    $scope.numberDate = [];
    for (var i = 1; i <= 31; i++) {
        var JSONnumberDate = {
            day: i
        };
        $scope.numberDate.push(JSONnumberDate);
    }
    $scope.checkDate = function() {
        for ($scope.month = 1; $scope.month <= 12; $scope.month++) {
            $scope.days = $scope.dayOfMonth[$scope.month - 1];
            var JSONmon = {
                month: $scope.nameOfMonth[$scope.month - 1],
                day: $scope.days
            };
            $scope.JSONmonth.push(JSONmon);
            for (var day = 1; day <= $scope.days; day++) {
                if (day == $scope.startSaturn) {
                    var JSONdate = {
                        day: day,
                        month: $scope.nameOfMonth[$scope.month - 1]
                    };
                    $scope.data.push(JSONdate);
                    $scope.startSaturn += 7;
                    $scope.checkSaturn($scope.days);
                } else if (day == $scope.startSun) {
                    var JSONdate = {
                        day: day,
                        month: $scope.nameOfMonth[$scope.month - 1]
                    };
                    $scope.data.push(JSONdate);
                    $scope.startSun += 7;
                    $scope.checkSun($scope.days);
                }
            }
        }
    };
    $scope.checkSaturn = function(day) {
        if ($scope.startSaturn > day) {
            $scope.startSaturn = $scope.startSaturn - day;
        }
    };
    $scope.checkSun = function(day) {
        if ($scope.startSun > day) {
            $scope.startSun = $scope.startSun - day;
        }
    };
    $scope.outputMonth = "Month";
    $scope.chooseMonth = function(m, d) {
        $scope.outputMonth = m;
        $scope.numberDate = [];
        for (var i = 1; i <= d; i++) {
            var JSONnumberDate = {
                day: i
            };
            $scope.numberDate.push(JSONnumberDate);
        }
    };
    $scope.outputDay = "Day";
    $scope.chooseDay = function(d) {
        $scope.outputDay = d;
        $scope.strStartDate = $scope.outputDay + "/" + $scope.outputMonth;
        $scope.calDate();
    };
    ////////////////
    $scope.outputMonth1 = "Month";
    $scope.chooseMonth1 = function(m, d) {
        $scope.outputMonth1 = m;
        $scope.numberDate1 = [];
        for (var i = 1; i <= d; i++) {
            var JSONnumberDate = {
                day: i
            };
            $scope.numberDate1.push(JSONnumberDate);
        }
    };
    $scope.outputDay1 = "Day";
    $scope.chooseDay1 = function(d) {
        $scope.outputDay1 = d;
        $scope.strEndDate = $scope.outputDay1 + "/" + $scope.outputMonth1;
        $scope.calDate();
    };
    $scope.calDate = function() {
        $scope.tmp = 0;
        if ($scope.outputDay1 >= $scope.outputDay) {
            for ($scope.real = $scope.outputDay; $scope.real <= $scope.outputDay1; $scope.real++) {
                for (var i = 0; i < $scope.data.length; i++) {
                    if ($scope.outputMonth == $scope.data[i].month && $scope.real == $scope.data[i].day) {
                        $scope.tmp++;
                        console.log($scope.data[i]);
                    }
                }
            }
            if ($scope.outputMonth == $scope.outputMonth1) {
                $scope.result = $scope.outputDay1 * 1 - $scope.outputDay * 1 + 1;
                $scope.result = $scope.result - $scope.tmp;
            } else if ($scope.outputMonth != $scope.outputMonth1) {
                $scope.result = ($scope.outputDay1 * 1 + $scope.numberDate.length) - $scope.outputDay * 1;
            }
        } else if ($scope.outputDay1 < $scope.outputDay) {
            $scope.result = ($scope.outputDay1 * 1 + $scope.numberDate.length) - $scope.outputDay * 1;
        }
    };
    $scope.clear = function() {
        $scope.outputMonth = "Month";
        $scope.outputMonth1 = "Month";
        $scope.outputDay1 = "Day";
        $scope.outputDay = "Day";
        $scope.result = 0;
        $scope.tmp = 0;
    };
    $scope.checkDate();
}]);