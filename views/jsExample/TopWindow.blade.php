<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript">
            function parentFun(argument) {
                alert('this is from parent!');
            }

        </script>
    </head>
    <frameset cols="50%, *" id="TopWindow">
        <frame name="Menu" src="menu"></frame>
        <frame name="show" src="LowerWindow"></frame>

        <!-- <frameset rows="50%, *">
            <frame name="UpperWindow" src="UpperWindow"></frame>
            <frame name="LowerWindow" src="LowerWindow"></frame>
        </frameset>    --> 
    </frameset>
    
    
</html>
