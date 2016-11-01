<div class="navbar navbar-default"  role="navigation">
	<div class="container">


		@include('nav.nav-left')


		{{-- right(Notification) --}}

		<ul class="nav navbar-nav navbar-right">
			<li>
				<a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                    <i class="mdi mdi-bell"></i>
                    <span class="badge up bg-success">4</span>
                </a>

				<ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
					<li>
                        <h5>Notifications</h5>
                    </li>
                    <li>
                        <a href="#" class="user-list-item">
                            <div class="icon bg-info">
                                <i class="mdi mdi-account"></i>
                            </div>
                            <div class="user-desc">
                                <span class="name">New Signup</span>
                                <span class="time">5 hours ago</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="user-list-item">
                            <div class="icon bg-danger">
                                <i class="mdi mdi-comment"></i>
                            </div>
                            <div class="user-desc">
                                <span class="name">New Message received</span>
                                <span class="time">1 day ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="all-msgs text-center">
                        <p class="m-0"><a href="#">See all Notification</a></p>
                    </li>
				</ul>
			</li>


			<li>
				<a href="javascript:void(0);" class="right-bar-toggle right-menu-item">
					<i class="mdi mdi-settings"></i>
				</a>
			</li>

			<li class="dropdown user-box">
				<a href="#" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown">
					<img src="/images/users/avatar-1.jpg" alt="user-image" class="img-circle user-img">
				</a>

				<ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
					<li>
						<h5>Hi, User</h5>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="ti-user m-r-5"></i>
							Profile
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="ti-setting m-r-5"></i>
							Setting
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="ti-power-off m-r-5"></i>
							Logout
						</a>
					</li>
				</ul>
			</li>

		</ul>


	</div>
</div>