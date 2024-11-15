<div>
    <div class="profile-tab height-100-p">
        <div class="tab height-100-p">
            <ul class="nav nav-tabs customtab" role="tablist">
                <li class="nav-item">

                    <a wire:click.prevent='selectTab("personal_details")' class="nav-link 
                    {{$tab == 'personal_details' ? 'active' : '' }}" 
                    data-toggle="tab" href="#personal_details" role="tab">
                        Mas detalles
                    </a>
                </li>

                <li class="nav-item">
                    <a wire:click.prevent='selectTab("update_password")' class="nav-link 
                    {{$tab == 'update_password' ? 'active' : '' }}"
                    data-toggle="tab" href="#update_password" role="tab">
                        Actualizar contraseña
                    </a>
                </li>

               
            </ul>
        </div>
    </div>

    <div class="tab-content">
    <!-- Timeline Tab start -->
             <div class="tab-pane fade {{$tab == 'personal_details' ? 'active show' : '' }} " id="personal_details" role="tabpanel">
                <div class="pd-20">
                    <form wire:submit.prevent='UpdateAdminPersonalDetails()'>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nombre</label>
                                    <input type="text" class="form-control" wire:model='nombre' 
                                    placeholder="Introduce tu nombre completo">
                                    @error('nombre')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" wire:model='email' 
                                    placeholder="Introduce tu correo electronico">
                                    @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nombre de usuario</label>
                                    <input type="text" class="form-control" wire:model='username' 
                                    placeholder="Introduce tu nombre de usuario">
                                    @error('username')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </form>
                </div>
             </div>
        

            <div class="tab-pane fade {{$tab == 'update_password' ? 'active show' : '' }} " id="update_password" role="tabpanel">
                <div class="pd-20 profile-task-wrap">
                    ACTUALIZAR CONTRASEÑA
                </div>
            </div>
    </div> 
</div>
