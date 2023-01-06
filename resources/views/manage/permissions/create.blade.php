@extends ('layouts.manage')

@section('content')

<div class="flex-container p-l-25">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Create New Permission</h1>
        </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
        <div class="column">

            <form action="{{route('permissions.store')}}" method="POST">
                {{csrf_field()}}

                <div class="block">
                    <b-radio v-model="permissionType" name="permission_type" native-value="basic">Basic Permissions</b-radio>
                    <b-radio v-model="permissionType" name="permission_type" native-value="crud">C.R.U.D Permissions</b-radio>
                </div>

                <div class="field" v-if="permissionType == 'basic'">
                    <label for="display_name" class="label">Display Name</label>
                    <p class="control">
                        <input type="text" class="input" name="display_name" id="display_name">
                    </p>
                </div>

                <div class="field" v-if="permissionType == 'basic'">
                    <label for="name" class="label">Slug</label>
                    <p class="control">
                        <input type="text" class="input" name="name" id="name">
                    </p>
                </div>

                <div class="field" v-if="permissionType == 'basic'">
                    <label for="description" class="label">Description</label>
                    <p class="control">
                        <input type="text" class="input" name="description" id="description" placeholder="Describe what the permission does">
                    </p>
                </div>

                <div class="field" v-if="permissionType == 'crud'">
                    <label for="resource" class="label">Resource</label>
                    <p class="control">
                        <input type="text" class="input" name="resource" id="resource" v-model="resource" placeholder="The resource name">
                    </p>
                </div>

                <div class="columns" v-if="permissionType == 'crud'">

                    <div class="column is-one-quarter">
                        <div class="field">
                            <b-checkbox v-model="crudSelected" native-value="create">Create</b-checkbox>
                        </div>
                        <div class="field">
                            <b-checkbox v-model="crudSelected" native-value="read">Read</b-checkbox>
                        </div>
                        <div class="field">
                            <b-checkbox v-model="crudSelected" native-value="update">Update</b-checkbox>
                        </div>
                        <div class="field">
                            <b-checkbox v-model="crudSelected" native-value="delete">Delete</b-checkbox>
                        </div>
                    </div>

                    <input type="hidden" class="input" name="crud_selected" :value="crudSelected">

                    <div class="column">
                        <table class="table is-overall-hidden">
                            <thead>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Description</th>
                            </thead>
                            <tbody v-if="resource.lenght >= 3 && crudSelected.lenght > 0">
                                <tr v-for="item in crudSelected" :key="item">
                                    <td v-text-field="crudName(item)"></td>
                                    <td v-text-field="crudSlug(item)"></td>
                                    <td v-text-field="crudDescrition(item)"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


                <button class="button is-primary"><i class="fa fa-plus m-r-10"></i>Create Permission</button>

            </form>

        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
var app = new Vue({
  el: '#app',
  data: {
    permissionType: 'basic',
    resource: '',
    crudSelected: ['create', 'read', 'update', 'delete']
  },
  methods: {
    crudName: function(item) {
      return item.substr(0,1).toUpperCase() + item.substr(1) + " " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
    },
    crudSlug: function(item) {
      return item.toLowerCase() + "-" + app.resource.toLowerCase();
    },
    crudDescription: function(item) {
      return "Allow a User to " + item.toUpperCase() + " a " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
    }
  }
});
</script>
@endsection
