@php
    $page = \Z3d0X\FilamentFabricator\Models\Page::query()->where('slug', 'home')->first();
    $data = collect($page->blocks)->filter(fn($item) => $item['type'] == 'home-slider')->first();
    $images = $data['data']['images'] ?? [];
@endphp
<div class="site-main">
    <div class="banner">
        <div class="slick_slider slider-banner lazy ">
            @foreach($images as $image)
                <div class="item">
                    <img class="img-center img-banner" src="{{ \Illuminate\Support\Facades\Storage::url($image) }}">
                </div>
            @endforeach
        </div>
    </div>
    <section
        class="contact-page section-block module_service process-section  ttm-bgimage-yes bg-img6 ttm-bg res-991-margin_top_0 ttm-bgcolor-primary ttm-row perfomance-section  clearfix">
        <div class="container">
            <h3 class="title">Liên hệ</h3>
            <div class="row">
                <div class="col-lg-6">
                    <form>
                        <div class="form-group">
                            <label>Họ tên</label>
                            <input type="text" wire:model.debounce="name" placeholder="Họ tên"/>
                            @error('name')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" wire:model.debounce="address" placeholder="Địa chỉ" />
                            @error('address')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" wire:model.debounce="email" placeholder="Địa chỉ email"/>
                            @error('email')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="email" wire:model.debounce="phone" placeholder="Số điện thoại"/>
                            @error('phone')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea colspan="100" rows="5" wire:model.debounce="message"></textarea>
                            @error('message')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <button wire:click.prevent="save">Submit</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <ul>
                        <li>
                            <span class="name font-weight-bold text-xl">Cơ sở 1</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas placeat amet quam a labore
                                architecto provident ipsum at, sint suscipit.</p>
                        </li>
                        <li>
                            <span class="name font-weight-bold text-xl">Cơ sở 2</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas placeat amet quam a labore
                                architecto provident ipsum at, sint suscipit.</p>
                        </li>
                        <li>
                            <span class="name font-weight-bold text-xl">Cơ sở 3</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas placeat amet quam a labore
                                architecto provident ipsum at, sint suscipit.</p>
                        </li>
                        <li>
                            <span class="name font-weight-bold text-xl">Cơ sở 4</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas placeat amet quam a labore
                                architecto provident ipsum at, sint suscipit.</p>
                        </li><li>
                            <span class="name font-weight-bold text-xl">Cơ sở 5</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas placeat amet quam a labore
                                architecto provident ipsum at, sint suscipit.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('contacted', function () {
            alert('Chúng tôi đã ghi nhân thông tin liên hệ của bạn.!')
        })
    </script>
</div>