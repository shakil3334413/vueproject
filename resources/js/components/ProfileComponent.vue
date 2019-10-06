<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 m-5">
                <form @submit.prevent="login" @keydown="form.onKeydown($event)">
                    <div class="form-group">
                      <label>Username</label>
                      <input v-model="form.username" type="text" name="username"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('username') }">
                      <has-error :form="form" field="username"></has-error>
                    </div>

                    <div class="form-group">
                      <label>Password</label>
                      <input v-model="form.password" type="password" name="password"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                      <has-error :form="form" field="password"></has-error>
                    </div>

                    <button :disabled="form.busy" type="submit" class="btn btn-primary">Log In</button>
                  </form>
            </div>
            <div class="col-md-6 m-4">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
              // Create a new form instance
              form: new Form({
                name: '',
                email:'',
                password: '',
                remember: false
              })
            }
          },
          methods: {
            usercreate () {
              // Submit the form via a POST request
              this.form.post('api/user ');
                
            }
          },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
