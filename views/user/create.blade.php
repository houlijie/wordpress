<!DOCTYPE html>
<html>
<head>
    <title>user create</title>
</head>
<body>

    @if (isset($errors) && count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($error->all() as $error)
            <li>
                {{ $error }}
            </li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container">
        <div class="content">
            <div class="title">
                <p>@{{ message }}</p>
            </div>
        </div>
    </div>

    <div class="container">
        <table>
            <tr>
                <th>用户名：</th>
                <td><input type="text" name="user_name"></td>
            </tr>
            <tr>
                <td>性&nbsp;&nbsp;别：</td>
                <td>
                    <select name="gender">
                        <option value="male">男</option>
                        <option value="female">女</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>E-Mail：</th>
                <td><input type="text" name="email"></td>
            </tr>
        </table>
        <button type="submit">提交</button>
    </div>
</body>
<script type="text/javascript" src="{{url('js/vue.js')}}"></script>
<script type="text/javascript">
    new Vue({
        el: '.title',
        data: {
            message: 'hello lumen !'
        }
    })
</script>


</html>