<!DOCTYPE html>
<html>
<head>
    <title>watch vs compute</title>
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

    <div id="watchVsCompute_computed">
        firstname: <input v-model="firstname"> <br>
        middlename: <input v-model="middlename"> <br>
        lastname: <input v-model="lastname"> <br>
        your fullname is @{{ fullname }}
    </div>
    <br><hr><br>
    <div id="watchVsCompute_watch">
        firstname: <input v-model="firstname"> <br>
        lastname: <input v-model="lastname"> <br>
        your fullname is @{{ fullname }}
    </div>


</body>
<script type="text/javascript" src="{{url('js/vue.js')}}"></script>
<script type="text/javascript">
    var vm = new Vue({
        el: '#watchVsCompute_computed',
        data: {
            firstname: '',
            middlename: '',
            lastname: 'ddd'
        },
        //computed 默认只有getter, 不过在需要的时候可以提供一个setter
        computed: {
            //只有getter
            // fullname: function(){
            //     return this.firstname + ' ' + this.middlename + ' '+ this.lastname
            // }


            //既有getter 又有setter,当vm.fullname 被定义的时候，setter被调用
            fullname: {
                get: function(){
                    return this.firstname+' '+this.middlename +' '+this.lastname
                },
                set: function(newValue){
                    var names  = newValue.split('_')
                    this.firstname = names[0]
                    this.middlename = names[1]
                    this.lastname = names[names.length -1]
                }
            }
        }
    });
    // vm.fullname = 'lina_lisa_lily';

    var vm = new Vue({
      el: '#watchVsCompute_watch',
      data: {
        firstname: 'Foo',
        lastname: 'Bar',
        fullname: 'Foo Bar'
      },
      //用来观察vue实例上的数据变动，一般使用compute 比较方便
      //watch允许执行异步操作，限制我们执行该操作的频率
      //在获得最终结果前设置中间状态，compute不行
      watch: {
        firstname: function (val) {
          this.fullname = val + ' ' + this.lastname
        },
        lastname: function (val) {
          this.fullname = this.firstname + ' ' + val
        }
      }
    });
    
</script>
</html>
