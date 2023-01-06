<div class="side-menu" id="admin-side-menu">
    <aside class="menu m-t-10 m-l-10">
        <p class="menu-label">General</p>
        <ul class="menu-list">
            <li><a href="{{ route('manage.dashboard')}}" class="{{Nav::isRoute('manage.dashboard') }}"><i class="fas fa-home m-r-10"></i>Dashboard</a></li>
        </ul>
        <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
        <p class="menu-label">Users</p>
        <ul class="menu-list">
            <li><a href="{{route('users.index')}}" class="{{Nav::isResource('users')}}"><i class="fas fa-user-edit m-r-10"></i></i>Manage Users</a></li>
            <li>
                <a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}"><i class="fas fa-user-cog m-r-10"></i>Roles &amp; Permissions</a>
                <ul class="submenu">
                    <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
                    <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permissions</a></li>
                </ul>
            </li>
        </ul>
        <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
        <p class="menu-label">Posts</p>
        <ul class="menu-list">
          <li>
              <a class="has-submenu {{Nav::isResource('posts')}}"><i class="fas fa-edit m-r-10"></i>Manage Posts</a>
              <ul class="submenu">
                  <li><a href="{{route('posts.index')}}" class="{{Nav::isResource('posts/index')}}"><i class="far fa-eye m-r-10"></i>See all posts</a></li>
                  <li><a href="{{route('posts.create')}}" class="{{Nav::isResource('posts/create')}}"><i class="fas fa-pen m-r-10"></i>Create Post</a></li>
              </ul>
          </li>
        </ul>
        <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
        <p class="menu-label">Categories</p>
        <ul class="menu-list">
            <li>
                <a href="{{route('categories.index')}}" class="{{Nav::isResource('categories')}}"><i class="fas fa-list m-r-10"></i>Manage Categories</a>
            </li>
        </ul>
    </aside>
</div>
