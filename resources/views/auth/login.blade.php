<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TOLL SUVIDHA : Login Panel</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ URL::asset('AdminLTE.min.css') }}">
        <style>
            .help-block.error {
                margin-bottom: 5px;
            }
        </style>
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-box-body">
                
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                
                <form action="{{ url('auth') }}" id="main" method="post" novalidate>
                    <div class="form-group has-feedback">
                        <label class="col-sm-8 control-label" for="email">Email</label>
                        <div class="col-sm-12">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-sm-12 messages"></div>
                    </div>

                    <div class="form-group has-feedback">
                        <label class="col-sm-2 control-label" for="password">Password</label>
                        <div class="col-sm-12">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="col-sm-12 messages"></div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <br>
                            <button type="submit" name="submit" id="formSubmit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                            <br>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>

        <!-- jQuery 2.2.3 -->
        <script src=" {{ URL::asset('bootstrap/js/jquery-2.2.3.min.js')}}"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src=" {{ URL::asset('bootstrap/js/bootstrap.min.js') }} "></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.11.1/validate.min.js"></script>
        <script>
            $(document).ready(function(){
                (function() {
                    // These are the constraints used to validate the form
                    var constraints = {
                        email: {
                            presence: true,
                            email: true
                        },
                        password: {
                            presence: true,
                            length: {
                                minimum: 6
                            }
                        }

                    };

                    // Hook up the form so we can prevent it from being posted
                    var form = document.querySelector("form#main");
                    form.addEventListener("submit", function(ev) {
                        var form = document.querySelector("form#main");
                        // validate the form aainst the constraints
                        var errors = validate(form, constraints);

                        //alert(errors);// then we update the form to reflect the results
                        //console.log(errors)
                        showErrors(form, errors || {});
                        if (!errors) {
                            return true;
                        }else{
                            ev.preventDefault();
                        }
                    });


                    // Hook up the inputs to validate on the fly
                    var inputs = document.querySelectorAll("input, textarea, select")
                    for (var i = 0; i < inputs.length; ++i) {
                        inputs.item(i).addEventListener("change", function(ev) {
                            var errors = validate(form, constraints) || {};
                            showErrorsForInput(this, errors[this.name])
                        });
                    }

                    // Updates the inputs with the validation errors
                    function showErrors(form, errors) {
                        //                    alert(form);alert(errors);
                        // We loop through all the inputs and show the errors for that input
                        _.each(document.querySelectorAll("input[name], select[name]"), function(input) {
                            // Since the errors can be null if no errors were found we need to handle
                            // that
                            showErrorsForInput(input, errors && errors[input.name]);
                        });
                    }

                    // Shows the errors for a specific input
                    function showErrorsForInput(input, errors) {
                        // This is the root of the input
                        //alert(errors);

                        var formGroup = closestParent(input.parentNode, "form-group")
                        // Find where the error messages will be insert into
                        , messages = formGroup.querySelector(".messages");
                        // First we remove any old messages and resets the classes
                        resetFormGroup(formGroup);
                        // If we have errors
                        if (errors) {
                            // we first mark the group has having errors
                            formGroup.classList.add("has-error");
                            // then we append all the errors
                            _.each(errors, function(error) {
                                addError(messages, error);
                            });
                        } else {
                            // otherwise we simply mark it as success
                            formGroup.classList.add("has-success");
                        }
                    }

                    // Recusively finds the closest parent that has the specified class
                    function closestParent(child, className) {
                        //                                                    alert(child);
                        //                                alert(className);
                        if (!child || child == document) {
                            return null;
                        }
                        if (child.classList.contains(className)) {
                            return child;
                        } else {
                            return closestParent(child.parentNode, className);
                        }
                    }

                    function resetFormGroup(formGroup) {
                        // Remove the success and error classes
                        formGroup.classList.remove("has-error");
                        formGroup.classList.remove("has-success");
                        // and remove any old messages
                        _.each(formGroup.querySelectorAll(".help-block.error"), function(el) {
                            el.parentNode.removeChild(el);
                        });
                    }

                    // Adds the specified error with the following markup
                    // <p class="help-block error">[message]</p>
                    function addError(messages, error) {
                        var block = document.createElement("p");
                        block.classList.add("help-block");
                        block.classList.add("error");
                        block.innerText = error;
                        messages.appendChild(block);
                    }
                })();
            });
        </script>
    </body>
</html>