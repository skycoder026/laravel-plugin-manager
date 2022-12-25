<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

        @include('plugin-manager::src.css.style')

        <title>Plugin</title>
    </head>




    <body>



        @include('plugin-manager::plugin-manager.plugins.view-detail-modal')




        <div class="tr-plugin-posted section-padding">
            <div class="container">
                <div class="plugin-tab text-center">



                    @include('plugin-manager::plugin-manager.plugins.plugin-type-tab')

                    <div class="tab-content text-left">
                        <div role="tabpanel" class="tab-pane fade active show" id="hot-plugins">
                            <div class="row">

                                @foreach ($allPlugins['data'] as $key => $plugin)

                                    @php $plugin = ((object)$plugin); @endphp

                                    <div class="col-md-6 col-lg-3">
                                        <div class="plugin-item">
                                            <div class="plugin-info">
                                                <div class="plugin-thumbnail">
                                                    <img src="{{ $base_url }}/{{ $plugin->thumbnail_image }}" alt="images" class="img-fluid">
                                                </div>
                                                <div class="plugin-desc">
                                                    <div class="plugin-body">
                                                        <span class="plugin-title">
                                                            <a href="#" class="plugin-title-text">{{ $plugin->title }}</a>
                                                        </span>
                                                        <ul class="plugin-meta">
                                                            <li class="d-flex justify-content-between">
                                                                <span><i class="fad fa-user-circle"></i><span class="plugin-author">{{ $plugin->author }}</span></span>
                                                                <span class="badge bg-info plugin-version">
                                                                    {{ $plugin->current_version }}
                                                                </span>
                                                            </li>
                                                            <li class="d-flex justify-content-between">
                                                                <a href="javascript:void(0)" onclick="showPluginDetailModal(`{{ $plugin->description }}`, this)" type="button" data-bs-toggle="modal" data-bs-target="#pluginView">
                                                                    <i class="fad fa-eye"></i>View Details
                                                                </a>
                                                                <span><i class="fad fa-download"></i>50</span>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="plugin-footer">

                                                        @if(in_array($plugin->id, $installedPlugins))
                                                            <a href="javascript:void(0)" onclick="uninstallPlugin(`{{ $plugin->id }}`, `{{ $plugin->name }}`)" class="uninstall">Uninstall Now</a>
                                                        @else
                                                            <a href="javascript:void(0)" onclick="installPlugin(`{{ $plugin->id }}`, `{{ $plugin->name }}`, `{{ $plugin->author }}`, `{{ $plugin->repository }}`, `{{ $plugin->branch }}`)" class="install">Install Now</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>











                        <div role="tabpanel" class="tab-pane fade in" id="recent-plugins">
                            <div class="row">


                                @foreach ($allPlugins['data'] as $key => $plugin)

                                    @php $plugin = ((object)$plugin); @endphp

                                    @if(in_array($plugin->id, $installedPlugins))

                                        <div class="col-md-6 col-lg-3">
                                            <div class="plugin-item">
                                                <div class="plugin-info">
                                                    <div class="plugin-thumbnail">
                                                        <img src="{{ $base_url }}/{{ $plugin->thumbnail_image }}" alt="images" class="img-fluid">
                                                    </div>
                                                    <div class="plugin-desc">
                                                        <div class="plugin-body">
                                                            <span class="plugin-title">
                                                                <a href="#" class="plugin-title-text">{{ $plugin->title }}</a>
                                                            </span>
                                                            <ul class="plugin-meta">
                                                                <li class="d-flex justify-content-between">
                                                                    <span><i class="fad fa-user-circle"></i><span class="plugin-author">{{ $plugin->author }}</span></span>
                                                                    <span class="badge bg-info plugin-version">
                                                                        {{ $plugin->current_version }}
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex justify-content-between">
                                                                    <a href="javascript:void(0)" onclick="showPluginDetailModal(`{{ $plugin->description }}`, this)" type="button" data-bs-toggle="modal" data-bs-target="#pluginView">
                                                                        <i class="fad fa-eye"></i>View Details
                                                                    </a>
                                                                    <span><i class="fad fa-download"></i>50</span>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="plugin-footer">
                                                            <a href="javascript:void(0)" onclick="uninstallPlugin(`{{ $plugin->id }}`, `{{ $plugin->name }}`)" class="uninstall">Uninstall Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>




                        <div role="tabpanel" class="tab-pane fade in" id="popular-plugins">
                            <div class="row">


                                @foreach ($allPlugins['data'] as $key => $plugin)

                                    @php $plugin = ((object)$plugin); @endphp

                                    @if(!in_array($plugin->id, $installedPlugins))

                                        <div class="col-md-6 col-lg-3">
                                            <div class="plugin-item">
                                                <div class="plugin-info">
                                                    <div class="plugin-thumbnail">
                                                        <img src="{{ $base_url }}/{{ $plugin->thumbnail_image }}" alt="images" class="img-fluid">
                                                    </div>
                                                    <div class="plugin-desc">
                                                        <div class="plugin-body">
                                                            <span class="plugin-title">
                                                                <a href="#" class="plugin-title-text">{{ $plugin->title }}</a>
                                                            </span>
                                                            <ul class="plugin-meta">
                                                                <li class="d-flex justify-content-between">
                                                                    <span><i class="fad fa-user-circle"></i><span class="plugin-author">{{ $plugin->author }}</span></span>
                                                                    <span class="badge bg-info plugin-version">
                                                                        {{ $plugin->current_version }}
                                                                    </span>
                                                                </li>
                                                                <li class="d-flex justify-content-between">
                                                                    <a href="javascript:void(0)" onclick="showPluginDetailModal(`{{ $plugin->description }}`, this)" type="button" data-bs-toggle="modal" data-bs-target="#pluginView">
                                                                        <i class="fad fa-eye"></i>View Details
                                                                    </a>
                                                                    <span><i class="fad fa-download"></i>50</span>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="plugin-footer">
                                                            <a href="javascript:void(0)" onclick="installPlugin(`{{ $plugin->id }}`, `{{ $plugin->name }}`, `{{ $plugin->author }}`, `{{ $plugin->repository }}`, `{{ $plugin->branch }}`)" class="install">Install Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


        <script>

            let install_url = `{{ route('plugin-manager.plugins.install', ':id') }}`

            let uninstall_url = `{{ route('plugin-manager.plugins.uninstall', ':id') }}`


            function showPluginDetailModal(plugin, object)
            {
                $('.plugin-description').html(plugin)

                $('.modal-image').attr('src', $(object).closest('.plugin-item').find('img').attr('src'))

                $('.modal-title').text($(object).closest('.plugin-item').find('.plugin-title-text').text())

                $('.modal-author').text($(object).closest('.plugin-item').find('.plugin-author').text())

                $('.modal-version').text($(object).closest('.plugin-item').find('.plugin-version').text())

            }




            function installPlugin(id, name, author, repository, branch)
            {

                request_url = install_url.replace(":id", id)

                $.ajax({
                    type:'GET',
                    url: request_url,
                    data: {
                        name        : name,
                        author      : author,
                        repository  : repository,
                        branch      : branch,
                    },
                    success:function(data) {

                        console.log(data)
                    }
                });
            }




            function uninstallPlugin(id, name)
            {

                request_url = uninstall_url.replace(":id", id)

                $.ajax({
                    type:'GET',
                    url: request_url,
                    data: {
                        name        : name,
                    },
                    success:function(data) {

                        console.log(data)
                    }
                });
            }
        </script>
    </body>
</html>
