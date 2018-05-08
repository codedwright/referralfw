<?php
    function referral_frontpage_written_testimonial_helper_template($count, $name = '', $text = '') {
        return <<<HTML
        <div class="row my-1">
            <div class="col-11">
                <div class="form-group">
                    <label for="referral-frontpage-meta-box[written][$count][name]">Customer Name: </label>
                    <div class="input-group">
                        <div class="input-group-prepend bg-light text-secondary">
                            <span class="input-group-text"><i class="fas fa-chevron-circle-down"></i></span>
                        </div>
                        <input type="text" id="referral-frontpage-meta-box[written][$count][name]" class="form-control" name="referral-frontpage-meta-box[written][$count][name]" value="$name">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary edit" type="button"><i class="fas fa-pencil-alt"></i> Edit</button>
                        </div>
                    </div>
                    <small class="form-text text-muted">The Customer's name for the quote.</small>
                </div>
                <div class="form-group collapse">
                    <label for="referral-frontpage-meta-box[written][$count][text]">Written Testimonial: <span class="small text-danger">Don&apos;t Forget To Save</span>
                    </label>
                    <textarea id="referral-frontpage-meta-box[written][$count][text]" class="form-control" name="referral-frontpage-meta-box[written][$count][text]"  rows="5">$text</textarea>
                    <small class="form-text text-muted">The Feedback that the Customer gave.</small>
                </div>
            </div>
            <div class="col-1">
                <span class="btn btn-danger remove h-100">
                    <i class="fas fa-minus-square h-100 align-middle"></i>
                </span>
            </div> 
        </div>
HTML;
    }

    function referral_frontpage_written_testimonial_template() {
        $header = <<<HTML
        <div class="card w-100 mw-100 p-0 m-0">
            <div class="card-header p-0" id="written-section">
                <h5 class="w-100 mb-0">
                    <a class="p-2 d-block text-center text-secondary" data-toggle="collapse" href="#written-form" role="button" aria-expanded="true" aria-controls="collapseOne">
                        Written Testimonial Section
                    </a>
                </h5>
            </div>

            <div id="written-form" class="collapse" aria-labelledby="written-section" data-parent="#frontpage-meta-box">
                <div class="card-body">
HTML;

        $body = '';
        global $post;
        $data = get_post_meta($post->ID, "referral-frontpage-meta-box", true);
        $count = 0;
        if (count($data['written']) > 0){
            foreach((array)$data['written'] as $written ){
                if (isset($written['name']) || isset($written['text'])){
                    $body .= referral_frontpage_written_testimonial_helper_template($count, $written['name'], $written['text']);
                    $count++;
                }
            }
        } else {
            $body = referral_frontpage_written_testimonial_helper_template( '0', '', '');
        }
        $label = __('Add Written Testimonial');
        $footer = <<<HTML
                </div>
                <div class="card-footer">
                    <span class="btn btn-success add"><i class="fas fa-plus-square"></i> $label</span>
                </div>
            </div>
        </div>
        <script>
            (function($) {
                var writtenCount = $count;                
                $('#written-form').on('click', '.remove', function() {
                    if(writtenCount > 1) {
                        $(this).parent().parent().remove();
                        writtenCount--;
                    } else {
                        document.getElementById('referral-frontpage-meta-box[written][0][name]').setAttribute('value', '');
                        document.getElementById('referral-frontpage-meta-box[written][0][text]').innerHTML = '';
                    }
                });
                $('#written-form').on('click', '.edit', function() {
                    $(this).parent().parent().parent().next().slideToggle();
                    $(this).parent().prev().prev().children().children().toggleClass('fa-chevron-circle-up');
                    $(this).parent().prev().prev().children().children().toggleClass('fa-chevron-circle-down');
                });
                document.querySelector('#written-form .add').addEventListener("click", function() {
                    var append = document.querySelector('#written-form .card-body').childNodes[1].outerHTML.split('[written][0]').join('[written][' + writtenCount + ']');            
                    document.querySelector('#written-form .card-body').insertAdjacentHTML('beforeend', append);
                    document.getElementById('referral-frontpage-meta-box[written][' + writtenCount + '][name]').setAttribute('value', '');
                    document.getElementById('referral-frontpage-meta-box[written][' + writtenCount + '][text]').innerHTML = '';
                    writtenCount++;
                });
            })( jQuery );
        </script>
HTML;
        return $header . $body . $footer;
    }
?>