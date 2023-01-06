@extends ('layouts.manage')

@section('content')

<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Edit User</h1>
        </div>
    </div>
    <hr class="m-t-0">

            <form action="{{route('users.update', $user->id)}}" method="POST">
                {{method_field('PUT')}}
                {{csrf_field()}}
                <div class="columns">
                  <div class="column">
                    <div class="field">
                      <label for="first_name" class="label">First Name</label>
                      <p class="control">
                        <input type="text" class="input" name="first_name" id="first_name" value="{{$user->first_name}}">
                      </p>
                    </div>

                    <div class="field">
                      <label for="last_name" class="label">Last Name</label>
                      <p class="control">
                        <input type="text" class="input" name="last_name" id="last_name" value="{{$user->last_name}}">
                      </p>
                    </div>

                    <div class="field">
                      <label for="email" class="label">Email</label>
                      <p class="control">
                        <input type="email" class="input" name="email" id="email" value="{{$user->email}}">
                      </p>
                    </div>

                    <div class="field">
                      <label for="password" class="label">Password</label>
                      <div class="field">
                        <b-radio name="password_options" native-value="keep" v-model="password_options">Do not change the password</b-radio>
                      </div>
                      <div class="field">
                        <b-radio name="password_options" native-value="auto" v-model="password_options">Auto-Generate new password</b-radio>
                      </div>
                      <div class="field">
                        <b-radio name="password_options" native-value="manual" v-model="password_options">Manually set new password</b-radio>
                        <p class="control">
                          <input type="text" class="input" name="password" id="password" v-if="password_options == 'manual'">
                        </p>
                      </div>
                    </div>

                  </div>
                  <div class="column">
                    <label for="roles" class="label">Roles</label>
                    <input type="hidden" class="input" name="roles" :value="rolesSelected">
                    @foreach ($roles as $role)
                      <div class="field">
                        <b-checkbox v-model="rolesSelected" native-value="{{$role->id}}">{{$role->display_name}}</b-checkbox>
                      </div>
                    @endforeach
                  </div>
                </div>
                <hr>

                <button class="button is-primary">Edit User</button>
            </form>
</div>

@endsection

@section('scripts')
<script>
    var app = new Vue({
        el: '#app',
        data: {
            password_options: 'keep',
            rolesSelected: {!! $user->roles->pluck('id')!!}
        }
    });
</script>
@endsection
