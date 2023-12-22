@if(!Auth::check())
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">ورود به سایت</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="loginForm" class="tooltip-end-bottom" novalidate="novalidate"
                          action="{{ asset('/login') }}" method="post">
                        @csrf
                        <div class="mb-3 filled form-group tooltip-end-top">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                 fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" class="cs-icon cs-icon-email">
                                <path
                                    d="M18 7L11.5652 10.2174C10.9086 10.5457 10.5802 10.7099 10.2313 10.7505C10.0776 10.7684 9.92238 10.7684 9.76869 10.7505C9.41977 10.7099 9.09143 10.5457 8.43475 10.2174L2 7"></path>
                                <path
                                    d="M14.5 4C15.9045 4 16.6067 4 17.1111 4.33706C17.3295 4.48298 17.517 4.67048 17.6629 4.88886C18 5.39331 18 6.09554 18 7.5L18 12.5C18 13.9045 18 14.6067 17.6629 15.1111C17.517 15.3295 17.3295 15.517 17.1111 15.6629C16.6067 16 15.9045 16 14.5 16L5.5 16C4.09554 16 3.39331 16 2.88886 15.6629C2.67048 15.517 2.48298 15.3295 2.33706 15.1111C2 14.6067 2 13.9045 2 12.5L2 7.5C2 6.09554 2 5.39331 2.33706 4.88886C2.48298 4.67048 2.67048 4.48298 2.88886 4.33706C3.39331 4 4.09554 4 5.5 4L14.5 4Z"></path>
                            </svg>
                            ایمیل
                            <input class="form-control pe-7" placeholder="ایمیل" name="email"
                                   aria-describedby="email-error" aria-invalid="true">
                            @error('email')
                            <div id="email-error" class="error">وارد کردن ایمیل ضروری است</div>@enderror
                        </div>
                        <div class="mb-3 filled form-group tooltip-end-top">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                 fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" class="cs-icon cs-icon-lock-off">
                                <path
                                    d="M5 12.6667C5 12.0467 5 11.7367 5.06815 11.4824C5.25308 10.7922 5.79218 10.2531 6.48236 10.0681C6.73669 10 7.04669 10 7.66667 10H12.3333C12.9533 10 13.2633 10 13.5176 10.0681C14.2078 10.2531 14.7469 10.7922 14.9319 11.4824C15 11.7367 15 12.0467 15 12.6667V13C15 13.9293 15 14.394 14.9231 14.7804C14.6075 16.3671 13.3671 17.6075 11.7804 17.9231C11.394 18 10.9293 18 10 18V18C9.07069 18 8.60603 18 8.21964 17.9231C6.63288 17.6075 5.39249 16.3671 5.07686 14.7804C5 14.394 5 13.9293 5 13V12.6667Z"></path>
                                <path
                                    d="M11 15H10 9M13 6V5C13 3.34315 11.6569 2 10 2V2C8.34315 2 7 3.34315 7 5V10"></path>
                            </svg>
                            رمز
                            <input class="form-control pe-7" name="password" type="password" placeholder="رمز">
                            <a class="text-small  t-3 s-3 p-2" href="">فراموش کردی؟</a>
                        </div>
                        <button type="submit" class=" btn btn-primary btn-block hvr-sweep-to-left">ورود</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="{{ asset('/register') }}" type="button" class="btn btn-warning">ثبت نام</a>
                </div>
            </div>
        </div>
    </div>
@endif

<!-- Modal -->
<div class="modal fade " id="menuManiModal" tabindex="-1" aria-labelledby="menuManiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="menuManiModalLabel">فهرست</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ asset('/') }}">خانه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('/shop') }}">فروشگاه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('/page/about-us') }}">درباره ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('/page/contact-us') }}">تماس با ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">سامانه تعمیرات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('/blog') }}">مجله فناوری</a>
                    </li>
                </ul>
                @livewire('user.theme.search.product-search')
            </div>

        </div>
    </div>
</div>

@if(isset($editor))
    {{-- CkEditor --}}
    <script>
        CKEDITOR.ClassicEditor.create(document.getElementsByClassName("editor"), {
            // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
            toolbar: {
                items: [
                    'exportPDF', 'exportWord', '|',
                    'findAndReplace', 'selectAll', '|',
                    'heading', '|',
                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                    'bulletedList', 'numberedList', 'todoList', '|',
                    'outdent', 'indent', '|',
                    'undo', 'redo',
                    '-',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                    'alignment', '|',
                    'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                    'textPartLanguage', '|',
                    'sourceEditing'
                ],
                shouldNotGroupWhenFull: true
            },
            // Changing the language of the interface requires loading the language file using the <script> tag.
            // language: 'es',
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
            heading: {
                options: [
                    {model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph'},
                    {model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1'},
                    {model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2'},
                    {model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3'},
                    {model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4'},
                    {model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5'},
                    {model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6'}
                ]
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
            placeholder: 'Welcome to CKEditor 5!',
            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
            fontFamily: {
                options: [
                    'default',
                    'Arial, Helvetica, sans-serif',
                    'Courier New, Courier, monospace',
                    'Georgia, serif',
                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                    'Tahoma, Geneva, sans-serif',
                    'Times New Roman, Times, serif',
                    'Trebuchet MS, Helvetica, sans-serif',
                    'Verdana, Geneva, sans-serif'
                ],
                supportAllValues: true
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
            fontSize: {
                options: [10, 12, 14, 'default', 18, 20, 22],
                supportAllValues: true
            },
            // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
            // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
            htmlSupport: {
                allow: [
                    {
                        name: /.*/,
                        attributes: true,
                        classes: true,
                        styles: true
                    }
                ]
            },
            // Be careful with enabling previews
            // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
            htmlEmbed: {
                showPreviews: true
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
            link: {
                decorators: {
                    addTargetToExternalLinks: true,
                    defaultProtocol: 'https://',
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
            mention: {
                feeds: [
                    {
                        marker: '@',
                        feed: [
                            '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                            '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                            '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                            '@sugar', '@sweet', '@topping', '@wafer'
                        ],
                        minimumCharacters: 1
                    }
                ]
            },
            // The "super-build" contains more premium features that require additional configuration, disable them below.
            // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
            removePlugins: [
                // These two are commercial, but you can try them out without registering to a trial.
                // 'ExportPdf',
                // 'ExportWord',
                'CKBox',
                'CKFinder',
                'EasyImage',
                // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                // Storing images as Base64 is usually a very bad idea.
                // Replace it on production website with other solutions:
                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                // 'Base64UploadAdapter',
                'RealTimeCollaborativeComments',
                'RealTimeCollaborativeTrackChanges',
                'RealTimeCollaborativeRevisionHistory',
                'PresenceList',
                'Comments',
                'TrackChanges',
                'TrackChangesData',
                'RevisionHistory',
                'Pagination',
                'WProofreader',
                // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                // from a local file system (file://) - load this site via HTTP server if you enable MathType.
                'MathType',
                // The following features are part of the Productivity Pack and require additional licence.
                'SlashCommand',
                'Template',
                'DocumentOutline',
                'FormatPainter',
                'TableOfContents'
            ]
        });
    </script>
@endif

@if(isset($owl_carousel))
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                rtl: true,
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            });

        });
    </script>
    <script src="{{ asset('theme/plugins/owl_carousel/dist/owl.carousel.min.js') }}"></script>
@endif
<div class="mobile_header">
    <nav class="mobile-bottom-nav ">
        <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
            <a class="mobile-bottom-nav__item-content" href="#">
                <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M2.36407 12.9579C1.98463 10.3208 1.79491 9.00229 2.33537 7.87495C2.87583 6.7476 4.02619 6.06234 6.32691 4.69181L7.71175 3.86687C9.80104 2.62229 10.8457 2 12 2C13.1543 2 14.199 2.62229 16.2882 3.86687L17.6731 4.69181C19.9738 6.06234 21.1242 6.7476 21.6646 7.87495C22.2051 9.00229 22.0154 10.3208 21.6359 12.9579L21.3572 14.8952C20.8697 18.2827 20.626 19.9764 19.451 20.9882C18.2759 22 16.5526 22 13.1061 22H10.8939C7.44737 22 5.72409 22 4.54903 20.9882C3.37396 19.9764 3.13025 18.2827 2.64284 14.8952L2.36407 12.9579Z"
                            stroke="#ff4242" stroke-width="1.5"></path>
                        <path d="M15 18H9" stroke="#ff4242" stroke-width="1.5" stroke-linecap="round"></path>
                    </g>
                </svg>
                جستجو
            </a>
        </div>
        <div class="mobile-bottom-nav__item">
            <a class="mobile-bottom-nav__item-content" href="">
                <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M20.9447 2H3.05529C2.88838 1.99997 2.72644 2.0581 2.59616 2.1648C2.46588 2.27151 2.37503 2.42042 2.33858 2.587L1 7.75C1 8.34674 1.23178 8.91903 1.64437 9.34099C2.05695 9.76295 2.61652 10 3.2 10C3.78348 10 4.34305 9.76295 4.75563 9.34099C5.16821 8.91903 5.4 8.34674 5.4 7.75C5.4 8.34674 5.63179 8.91903 6.04437 9.34099C6.45695 9.76295 7.01652 10 7.6 10C8.18348 10 8.74305 9.76295 9.15563 9.34099C9.56821 8.91903 9.8 8.34674 9.8 7.75C9.8 8.34674 10.0318 8.91903 10.4444 9.34099C10.8569 9.76295 11.4165 10 12 10C12.5835 10 13.1431 9.76295 13.5556 9.34099C13.9682 8.91903 14.2 8.34674 14.2 7.75C14.2 8.34674 14.4318 8.91903 14.8444 9.34099C15.2569 9.76295 15.8165 10 16.4 10C16.9835 10 17.5431 9.76295 17.9556 9.34099C18.3682 8.91903 18.6 8.34674 18.6 7.75C18.6 8.34674 18.8318 8.91903 19.2444 9.34099C19.6569 9.76295 20.2165 10 20.8 10C21.3835 10 21.9431 9.76295 22.3556 9.34099C22.7682 8.91903 23 8.34674 23 7.75L21.6604 2.587C21.6244 2.42041 21.5337 2.27142 21.4036 2.16467C21.2734 2.05793 21.1115 1.99983 20.9447 2Z"
                            stroke="#ff1744" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path
                            d="M2.75 13C2.75 12.5858 2.41421 12.25 2 12.25C1.58579 12.25 1.25 12.5858 1.25 13H2.75ZM22.75 13C22.75 12.5858 22.4142 12.25 22 12.25C21.5858 12.25 21.25 12.5858 21.25 13H22.75ZM1.25 13V20H2.75V13H1.25ZM4 22.75H20V21.25H4V22.75ZM22.75 20V13H21.25V20H22.75ZM20 22.75C21.5188 22.75 22.75 21.5188 22.75 20H21.25C21.25 20.6904 20.6904 21.25 20 21.25V22.75ZM1.25 20C1.25 21.5188 2.48122 22.75 4 22.75V21.25C3.30964 21.25 2.75 20.6904 2.75 20H1.25Z"
                            fill="#ff1744"></path>
                        <rect x="6" y="14" width="4" height="4" rx="0.5" stroke="#ff1744" stroke-width="1.5"></rect>
                        <path d="M18 22V15.5C18 15.2239 17.7761 15 17.5 15H14.5C14.2239 15 14 15.2239 14 15.5V22"
                              stroke="#ff1744" stroke-width="1.5"></path>
                    </g>
                </svg>
                فروشگاه
            </a>
        </div>
        <div class="mobile-bottom-nav__item">
            <a class="mobile-bottom-nav__item-content" href="{{ asset('/') }}">
                <img class="w-70px" src="{{ asset(setting_site()->site_logo) }}" alt="{{ setting_site()->site_name }}">
            </a>
        </div>

        <div class="mobile-bottom-nav__item">
            <a class="mobile-bottom-nav__item-content" href="">
                <svg class="icon-svg-panel-sm" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g fill="#ff1744">
                            <path
                                d="M6.834.33a2.25 2.25 0 012.332 0l5.25 3.182A2.25 2.25 0 0115.5 5.436V6A.75.75 0 0114 6v-.564a.75.75 0 00-.361-.642l-5.25-3.181a.75.75 0 00-.778 0l-5.25 3.181A.75.75 0 002 5.436v5.128a.75.75 0 00.361.642l4.028 2.44a.75.75 0 11-.778 1.283l-4.027-2.44A2.25 2.25 0 01.5 10.563V5.436a2.25 2.25 0 011.084-1.924L6.834.33z"></path>
                            <path fill-rule="evenodd"
                                  d="M11.749 7.325l.001-.042v-.286a.75.75 0 00-1.5 0v.286l.001.042a3.73 3.73 0 00-1.318.546.76.76 0 00-.03-.03l-.201-.203a.75.75 0 00-1.06 1.06l.201.203.03.028c-.26.394-.45.84-.547 1.319a.878.878 0 00-.04-.001H7a.75.75 0 000 1.5h.286l.038-.001c.097.48.286.926.547 1.32a.71.71 0 00-.028.027l-.202.202a.75.75 0 001.06 1.06l.203-.202a.695.695 0 00.025-.026c.395.261.842.45 1.322.548l-.001.036v.286a.75.75 0 001.5 0v-.286-.036c.48-.097.926-.287 1.32-.548l.026.026.202.203a.75.75 0 001.06-1.061l-.201-.202a.667.667 0 00-.028-.026c.261-.395.45-.842.547-1.321H15a.75.75 0 000-1.5h-.286l-.04.002a3.734 3.734 0 00-.547-1.319l.03-.028.202-.202a.75.75 0 00-1.06-1.061l-.203.202-.029.03a3.73 3.73 0 00-1.318-.545zM11 8.75A2.247 2.247 0 008.75 11 2.247 2.247 0 0011 13.25 2.247 2.247 0 0013.25 11 2.247 2.247 0 0011 8.75z"
                                  clip-rule="evenodd"></path>
                        </g>
                    </g>
                </svg>
                تعمیرات
            </a>
        </div>

        <div class="mobile-bottom-nav__item">
            <a class="mobile-bottom-nav__item-content" href="">
                <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path opacity="0.5"
                              d="M10.0376 5.31617L10.6866 6.4791C11.2723 7.52858 11.0372 8.90532 10.1147 9.8278C10.1147 9.8278 10.1147 9.8278 10.1147 9.8278C10.1146 9.82792 8.99588 10.9468 11.0245 12.9755C13.0525 15.0035 14.1714 13.8861 14.1722 13.8853C14.1722 13.8853 14.1722 13.8853 14.1722 13.8853C15.0947 12.9628 16.4714 12.7277 17.5209 13.3134L18.6838 13.9624C20.2686 14.8468 20.4557 17.0692 19.0628 18.4622C18.2258 19.2992 17.2004 19.9505 16.0669 19.9934C14.1588 20.0658 10.9183 19.5829 7.6677 16.3323C4.41713 13.0817 3.93421 9.84122 4.00655 7.93309C4.04952 6.7996 4.7008 5.77423 5.53781 4.93723C6.93076 3.54428 9.15317 3.73144 10.0376 5.31617Z"
                              fill="#ff1744"></path>
                        <path
                            d="M13.2595 1.87983C13.3257 1.47094 13.7122 1.19357 14.1211 1.25976C14.1464 1.26461 14.2279 1.27983 14.2705 1.28933C14.3559 1.30834 14.4749 1.33759 14.6233 1.38082C14.9201 1.46726 15.3347 1.60967 15.8323 1.8378C16.8286 2.29456 18.1544 3.09356 19.5302 4.46936C20.906 5.84516 21.705 7.17097 22.1617 8.16725C22.3899 8.66487 22.5323 9.07947 22.6187 9.37625C22.6619 9.52466 22.6912 9.64369 22.7102 9.72901C22.7197 9.77168 22.7267 9.80594 22.7315 9.83125L22.7373 9.86245C22.8034 10.2713 22.5286 10.6739 22.1197 10.7401C21.712 10.8061 21.3279 10.53 21.2601 10.1231C21.258 10.1121 21.2522 10.0828 21.2461 10.0551C21.2337 9.9997 21.2124 9.91188 21.1786 9.79572C21.1109 9.56339 20.9934 9.21806 20.7982 8.79238C20.4084 7.94207 19.7074 6.76789 18.4695 5.53002C17.2317 4.29216 16.0575 3.59117 15.2072 3.20134C14.7815 3.00618 14.4362 2.88865 14.2038 2.82097C14.0877 2.78714 13.9417 2.75363 13.8863 2.7413C13.4793 2.67347 13.1935 2.28755 13.2595 1.87983Z"
                            fill="#ff1744"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M13.4857 5.3293C13.5995 4.93102 14.0146 4.7004 14.4129 4.81419L14.2069 5.53534C14.4129 4.81419 14.4129 4.81419 14.4129 4.81419L14.4144 4.81461L14.4159 4.81505L14.4192 4.81602L14.427 4.81834L14.4468 4.8245C14.4618 4.82932 14.4807 4.8356 14.5031 4.84357C14.548 4.85951 14.6074 4.88217 14.6802 4.91337C14.8259 4.97581 15.0249 5.07223 15.2695 5.21694C15.7589 5.50662 16.4271 5.9878 17.2121 6.77277C17.9971 7.55775 18.4782 8.22593 18.7679 8.7154C18.9126 8.95991 19.009 9.15897 19.0715 9.30466C19.1027 9.37746 19.1254 9.43682 19.1413 9.48173C19.1493 9.50418 19.1555 9.52301 19.1604 9.53809L19.1665 9.55788L19.1688 9.56563L19.1698 9.56896L19.1702 9.5705C19.1702 9.5705 19.1707 9.57194 18.4495 9.77798L19.1707 9.57194C19.2845 9.97021 19.0538 10.3853 18.6556 10.4991C18.2607 10.6119 17.8492 10.3862 17.7313 9.99413L17.7276 9.98335C17.7223 9.96832 17.7113 9.93874 17.6928 9.89554C17.6558 9.8092 17.5887 9.66797 17.4771 9.47938C17.2541 9.10264 16.8514 8.53339 16.1514 7.83343C15.4515 7.13348 14.8822 6.73078 14.5055 6.50781C14.3169 6.39619 14.1757 6.32909 14.0893 6.29209C14.0461 6.27358 14.0165 6.26254 14.0015 6.25721L13.9907 6.25352C13.5987 6.13564 13.3729 5.72419 13.4857 5.3293Z"
                              fill="#ff1744"></path>
                    </g>
                </svg>
                تماس با ما
            </a>
        </div>
    </nav>
</div>
