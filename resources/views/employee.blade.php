@include('header')

<div class="col-lg-12 row">
    <div class="col-lg-3 pe-lg-0 pt-3">

        <div class="card">
            <div class="card">
                <div class="tab-content">
                    <div class="tab-pane preview-tab-pane active" role="tabpanel"
                        aria-labelledby="tab-dom-982cdc58-496a-4d4a-b8ff-5049feeaa54b"
                        id="dom-982cdc58-496a-4d4a-b8ff-5049feeaa54b">
                        <div class="list-group"><a class="list-group-item list-group-item-action active"
                                href="#">Setting</a>
                            <a class="list-group-item list-group-item-action" href="profile">Profile</a>
                            <a class="list-group-item list-group-item-action" href="employee">Manage Employee</a>
                            <a class="list-group-item list-group-item-action" href="driver">Manage Driver</a>
                            <a class="list-group-item list-group-item-action" href="branch">Manage Branches</a>
                            <a class="list-group-item list-group-item-action" href="invoice">Invoices</a>
                            <a class="list-group-item list-group-item-action" href="subscription">Subscription Plan</a>
                            <a class="list-group-item list-group-item-action" href="wallet">Wallet</a>
                            <a class="list-group-item list-group-item-action" href="#">API
                                Setting</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="col-lg-9 px-lg-0">
        <div class="row ms-lg-0 pe-lg-2">

            <div class="col-lg-6 col-xl-12 col-xxl-8 h-100 pt-5">
                <div class="col-xxl-12 col-md-12 pt-3">
                    <div class="card shopping-cart-bar-min-height h-100">
                        <div class="card-header d-flex flex-between-center">
                            <h3 class="mb-0 text-primary fw-bold">Employees</h3>
                            <div class="dropdown font-sans-serif btn-reveal-trigger">
                                <a class="btn btn-primary d-block w-100" href="/employee"><span
                                        class="fas fa-pencil-alt"></span>Create New Employee</a>
                            </div>
                        </div>

                    </div>
                    <br>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card theme-wizard mb-5">

                    <div class="card-body py-4">
                        <div class="tab-content">

                            <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel"
                                aria-labelledby="bootstrap-wizard-tab1" id="bootstrap-wizard-tab1">

                                <form method="POST" action="{{ route('employee.store') }}">
                                    @csrf
                                    <div class="row gx-2">
                                        <div class="mb-3 col-sm-6">
                                            <label for="Customer Phone" class="text-primary fs-10 fw-bold">NAME</label>
                                            <input class="form-control rounded-2 py-3" type="name" placeholder="NAME"
                                                name="name" required>
                                        </div>
                                        <div class="mb-3 col-sm-6">
                                            <label for="Customer Name" class="text-primary fs-10 fw-bold">EMAIL</label>
                                            <input class="form-control rounded-2 py-3" type="phone" placeholder=""
                                                name="email" required>
                                        </div>
                                    </div>
                                    <div class="row gx-2">
                                        <div class="mb-3 col-sm-6">
                                            <label for="Customer Phone"
                                                class="text-primary fs-10 fw-bold">Password</label>
                                            <input class="form-control rounded-2 py-3" type="password"
                                                placeholder="Password" name="password" required>
                                        </div>
                                    </div>
                                    <div class="row gx-2">
                                        <div class="mb-3 col-sm-8">
                                            <label for="role" class="text-primary fs-10 fw-bold">Role</label>
                                            <ul class="nav nav-pills mb-3" role="tablist">
                                                @foreach ($roles as $role)
                                                    <li class="nav-item border" role="presentation">
                                                        <button
                                                            class="nav-link role-select{{ $loop->first ? ' active' : '' }}"
                                                            data-bs-toggle="pill" type="button" role="tab"
                                                            aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                                                            data-role-id="{{ $role->id }}">
                                                            <span
                                                                class="d-md-inline-block py-2">{{ $role->name }}</span>
                                                        </button>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            <input type="hidden" name="roles" id="selectedRole">
                                        </div>
                                        <div class="mb-3 col-sm-4">
                                            <div class="mb-3"><label class="form-label text-primary fs-10 fw-bold"
                                                    for="bootstrap-wizard-gender">BRANCH</label>
                                                <select class="form-select rounded-2 py-3" name="branch"
                                                    id="bootstrap-wizard-gender">
                                                    <option value="">Select Branch</option>
                                                    @foreach ($branches as $branch)
                                                        <option value="{{ $branch->id }}">
                                                            {{ $branch->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary px-2 px-sm-4 py-2 rounded-5 fs-8"
                                        type="submit">Create <span class="fas fa-chevron-right ms-2"
                                            data-fa-transform="shrink-3"></span></button>
                                </form>
                            </div>

                            <div class="card-footer bg-body-tertiary">
                                <div class="px-sm-3 px-md-5">
                                    <ul class="pager wizard list-inline mb-0">
                                        <li class="next">
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-12 col-md-6 pt-3 pb-3">
                        <div class="card h-100">
                            <div class="card-body bg-body-tertiary">
                                <table class="table table-borderless fs-10 mb-0 text-start mb-3">
                                    @foreach ($employees as $employee)
                                        <tr class="border-bottom">
                                            <th class="ps-0">
                                                <div class="text-black fw-bold fs-9">
                                                    {{ $employee->name }}</div>
                                                <div class="bold">{{ $employee->role->name }}
                                                </div>
                                                <div class="text-800 fw-normal fs-11">
                                                    {{ $employee->created_at->format('d/m/Y H:i:s') }}
                                                </div>
                                            </th>
                                            <th class="pe-0 text-end ">
                                                <div class="text-success bold fs-6">
                                                    <div class="dropdown font-sans-serif btn-reveal-trigger">
                                                        <a class="btn btn-falcon-default btn-sm text-600"
                                                            href="{{ route('employee.edit', $employee->id) }}"><span
                                                                class="fas fa-pencil-alt"></span>Edit</a>
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- <section> close ============================--><!-- ============================================-->

                    <section class="py-0 bg-dark bottom-bar" data-bs-theme="light">
                        <div>
                            <hr class="my-0 text-600 opacity-25">
                            <div class="container py-3">
                                <div class="row justify-content-between fs-10">
                                    <div class="col-12 col-sm-auto text-center">
                                        <p class="mb-0 text-600 opacity-85">All Rights Reserved.
                                            <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none">
                                            2024 &copy; <a class="text-white opacity-85" href="#">Delivery
                                                Solution Portal</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end of .container-->
                    </section>
                </div>

            </div>

        </div>
        </main>
        <!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->


        <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
        <script>
            // JavaScript to handle role selection and update the hidden input field
            document.addEventListener('DOMContentLoaded', function() {
                const roleButtons = document.querySelectorAll('.role-select');
                const selectedRoleInput = document.getElementById('selectedRole');

                roleButtons.forEach(function(button) {
                    button.addEventListener('click', function() {
                        const roleId = this.getAttribute('data-role-id');
                        selectedRoleInput.value = roleId;
                    });
                });
            });
        </script>

        @include('footer')
