<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') | Animal Adoption</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{asset('admin_assets/css/style.css') }}">
        <style>
            .sidebar-navigation li a{
                text-decoration: none;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-12">

                    <div class="sidebar-container">
                        <div class="sidebar-logo">
                            Project Name
                        </div>
                        <ul class="sidebar-navigation">
                            <li class="header">Navigation</li>
                            <li>
                                <a href="{{route('index')}}">
                                    <i class="fa fa-home" aria-hidden="true"></i> Homepage
                                </a>
                            </li>
                            @can('admin-dash-access')
                            <li>
                                <a href="{{route('home')}}">
                                    <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
                                </a>
                            </li>
                            @endcan
                            <li>
                                <a href="{{route('profile')}}">
                                    <i class="fa fa-address-card" aria-hidden="true"></i> Profile
                                </a>
                            </li>

                            <li class="header">Menu</li>
                            @can('category-access')
                            <li>
                                <a href="{{route('category.index')}}">
                                    <i class="fa fa-list-alt" aria-hidden="true"></i> Category
                                </a>
                            </li>
                            @endcan

                            @can('org-inbox-access')
                                
                            <li>
                                <a href="{{route('inbox.viewMessage')}}">
                                    <i class="fa fa-message" aria-hidden="true"></i> org-inbox
                                    {{-- organization inbox --}}
                                </a>
                            </li>
                            @endcan

                            @can('admin-inbox-access')
                            <li>
                                <a href="{{route('adInbox.index')}}">
                                    <i class="fa fa-message" aria-hidden="true"></i> admin-inbox
                                    {{-- admin inbox --}}
                                </a>
                            </li>
                            @endcan

                            @can('animal-access')
                            <li>
                                <a href="{{route('animal.index')}}">
                                    <i class="fa fa-paw" aria-hidden="true"></i> animal
                                </a>
                            </li>
                            @endcan

                            @can('organization-access')
                            <li>
                                <a href="{{route('organization.index')}}">
                                    <i class="fa fa-building" aria-hidden="true"></i> organization
                                </a>
                            </li>
                            @endcan

                            @can('adoption-access')
                            <li>
                                <a href="{{route('adoption.index')}}">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i> adoption
                                </a>
                            </li>
                            @endcan

                            @can('admin-access')
                            <li>
                                <a href="{{route('admin.index')}}">
                                    <i class="fa fa-user" aria-hidden="true"></i> admin
                                </a>
                            </li>
                            @endcan
                            @can('blog-access')
                            <li>
                                <a href="{{route('blog.index')}}">
                                    <i class="fa fa-newspaper" aria-hidden="true"></i> blog
                                </a>
                            </li>
                            @endcan
                            
                            @can('user-access')
                                
                            <li>
                                <a href="{{route('user-role.index')}}">
                                    <i class="fa fa-lock" aria-hidden="true"></i> Permissions
                                </a>
                            </li>
                            @endcan
                           
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                         <i class="fa fa-sign-out" aria-hidden="true"></i> {{ __('Sign-Out') }}
                                            </a>
                        
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                        </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-10 col-sm-12">

                    <div class="container-fluid content p-3">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>