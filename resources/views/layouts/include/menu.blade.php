<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li><a href="{{ route('dashboard') }}" class="waves-effect"><i class="bx bx-home-circle"></i><span>Dashboard</span></a></li>

                <li class="@yield('admin')"><a href="#" class="waves-effect"><i class="bx bx-cog"></i><span>Administrator</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a class="@yield('userChild')" href="#"> <i class="fas fa-arrow-right sm child_i"></i> Users </a></li>
                        {{-- ================== Approval ================== --}}
                    </ul>
                </li>
                {{-- finacial --}}
                <li class="@yield('finance')"><a href="#" class="waves-effect"><i class="bx bx-package"></i><span>Finance & Accounting</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{-- ================== Income ================== --}}
                        <li><a class="@yield('income') " href="#"> <i class="fas fa-arrow-right sm child_i"></i> Income </a></li>
                        {{-- ================== Expense ================== --}}
                        <li><a class="@yield('expense') " href="#"> <i class="fas fa-arrow-right sm child_i"></i> Expense </a></li>
                        {{-- ================== Income type ================== --}}
                        <li><a class="@yield('income-type') " href="{{ route('income-type.index') }}"> <i class="fas fa-arrow-right sm child_i"></i> Income Type </a></li>
                        {{-- ================== expense type ================== --}}
                        <li><a class="@yield('expense-type') " href="#"> <i class="fas fa-arrow-right sm child_i"></i> Expense type </a></li>
                        {{-- ================== summary ================== --}}
                        <li><a class="@yield('summary') " href="#"> <i class="fas fa-arrow-right sm child_i"></i> Summary </a></li>

                    </ul>
                </li>


                {{--


                <i class="bx bx-package"></i>
                <li><a href="#" class="waves-effect"><i class="bx bx-briefcase-alt-2"></i><span>Human Resource</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('dashboard/employee')}}">Employee Information</a></li>
                        <li><a href="{{url('dashboard/department')}}">Department</a></li>
                        <li><a href="{{url('dashboard/designation')}}">Designation</a></li>
                    </ul>
                </li>
                <li><a href="#" class="waves-effect"><i class="bx bx-data"></i><span>Inventory Management</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('dashboard/material')}}">Material</a></li>
                        <li><a href="{{url('dashboard/material/purchase')}}"> Material Purchase</a></li>
                        <li><a href="{{url('dashboard/material/damage')}}">Material Damage</a></li>
                        <li><a href="#">Material Stock</a></li>
                    </ul>
                </li> --}}




                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="waves-effect"><i class="bx bx-power-off"></i><span>Logout</span></a></li>
            </ul>
        </div>
    </div>
</div>
