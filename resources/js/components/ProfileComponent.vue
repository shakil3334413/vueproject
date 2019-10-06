<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 m-4">
                <h2 class="card-title">User</h2><hr>
                <button type="button" class="btn btn-primary mb-2 float-right" data-toggle="modal" data-target="#UserModel"><i class="fas fa-user-plus"></i>Add User</button>
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
        <!-- Modal -->
        <div class="modal fade" id="UserModel" tabindex="-1" role="dialog" aria-labelledby="UserModelTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="UserModelTitle">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
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
                username: '',
                password: '',
                remember: false
              })
            }
          },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
