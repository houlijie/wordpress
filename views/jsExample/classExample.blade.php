<!DOCTYPE html>
<html>
<head>
    <title>js class example</title>
</head>
<body>

</body>
<script type="text/javascript">
    //工厂模式
    function Car(color,doors, brand){
        var ocar = new Object();
        ocar.color = color;
        ocar.doors = doors;
        ocar.brand = brand;
        ocar.showDetail = function (){
            document.write('this car is blong to '+ ocar.brand+', it has '+ocar.doors+' doors, with '+ocar.color+' color!');
        };

        return ocar;
    }
    var car = Car('red', '3', 'falari');
    // car.showDetail();
    //构造函数
    function customerBooking(bookingId, customerName, showDate)
    {
        this.CustomerName = customerName;
        this.bookingId = bookingId;
        this.showDate = showDate;
        this.showDetail = function(){
            document.write('our customer is '+ this.CustomerName);
        }
        // alert(this.bookingId);
    }

    var customer = new customerBooking(1, 'hhh', 'dsd');
    customer.showDetail();

    //原型模式（prototype）
    function Car(){
        
    }

    //极简主义法
    var Cat = {
        createNew: function(name, age){
            var cat = {};
            cat.name = name;
            cat.age = age;
            cat.makeSound = function(){
                alert('2222');
            }
        
            return cat;
        }
    };

    var cat1 = Cat.createNew('lily', 24);
    cat1.makeSound();
</script>
</html>