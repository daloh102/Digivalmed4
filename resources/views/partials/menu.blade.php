<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li>
            <select class="searchable-field form-control">

            </select>
        </li>
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('audit_log_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.audit-logs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.auditLog.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('medizingerate_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.medizingerates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/medizingerates") || request()->is("admin/medizingerates/*") ? "active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.medizingerate.title') }}
                </a>
            </li>
        @endcan
        @can('risikoprojekt_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.risikoprojekt.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('workflow_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.workflows.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/workflows") || request()->is("admin/workflows/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.workflow.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('workflow_path_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.workflow-paths.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/workflow-paths") || request()->is("admin/workflow-paths/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.workflowPath.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('risiken_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.risikens.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/risikens") || request()->is("admin/risikens/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.risiken.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('result_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.results.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/results") || request()->is("admin/results/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.result.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('dicom_namer_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.dicomNamer.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('dicom_namer_io_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.dicom-namer-ios.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/dicom-namer-ios") || request()->is("admin/dicom-namer-ios/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.dicomNamerIo.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('dicom_namer_cbc_t_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.dicom-namer-cbc-ts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/dicom-namer-cbc-ts") || request()->is("admin/dicom-namer-cbc-ts/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.dicomNamerCbcT.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('dicom_namer_conv_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.dicom-namer-convs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/dicom-namer-convs") || request()->is("admin/dicom-namer-convs/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.dicomNamerConv.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('ray_stationtwo_access')
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.rayStationtwo.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('ray_stationtwo_io_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.ray-stationtwo-ios.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/ray-stationtwo-ios") || request()->is("admin/ray-stationtwo-ios/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.rayStationtwoIo.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('ray_stationtwo_conv_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.ray-stationtwo-convs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/ray-stationtwo-convs") || request()->is("admin/ray-stationtwo-convs/*") ? "active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.rayStationtwoConv.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>