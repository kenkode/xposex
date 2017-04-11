 <nav class="navbar-default navbar-static-side" role="navigation">
    
           


            <div class="sidebar-collapse">

                <ul class="nav" id="side-menu">
                     <li>
                        <a href="{{ URL::to('employees/create') }}"><i class="fa fa-user fa-fw"></i> New Employee </a>
                    </li>

                    <li>
                        <a href="{{ URL::to('employees') }}"><i class="fa fa-users fa-fw"></i> Employees </a>
                    </li>

                    <li>
                        <a href="{{ URL::to('Properties') }}"><i class="fa fa-list fa-fw"></i>Company Property </a>
                    </li>

                     <li><a href="{{ URL::to('Appraisals') }}"><i class="fa fa-list fa-fw"></i>Employee Appraisal</a></li>
                     <li><a href="{{ URL::to('occurences') }}"><i class="fa fa-list fa-fw"></i>Employee Occurence </a></li>
                     <li><a href="{{ URL::to('deactives') }}"><i class="fa fa-list fa-fw"></i>Activate Employee</a></li>

                     <li>
                        <a href="{{ URL::to('reports/employees') }}"><i class="fa fa-folder fa-fw"></i> Reports </a>
                    </li>
                    
                    
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->