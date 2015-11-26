###

登录
     请求方式:POST
     请求路由:/admin/login
     请求参数:
                captcha,            验证码
                account,            账户
                password,           密码

     返回参数:
            {
                errCode,            0返回正常
                message,            错误信息
            }

###

###

---------------- Todo ----------------

_error_message = [
    '请输入用户名'
    '请输入密码'
    '请输入验证码'
]

_validate_request_parameters = ( error_message, parameters... )->

    for parameter in parameters
        # Todo

###

_is_empty_string = ( string )->
    return string.length is 0

$ ()->
    _login_form = $ '#login-form'
    _username_input = $ '#username-input'
    _password_input = $ '#password-input'
    _captcha_input  = $ '#captcha-input'
    _captcha_img = $ '#captcha-img'

    _captcha_img.on 'click', ( event )->
        $( this ).prop 'src', '/admin/captcha?' + new Date().getTime()

    _login_form.on 'submit', ( event )->

        _this = $ this
        event.preventDefault()

        # 待改进
        if _is_empty_string _username_input.val()
            alert '请输入用户名'
            return false

        if _is_empty_string _password_input.val()
            alert '请输入密码'
            return false

        if _is_empty_string _captcha_input.val()
            alert '请输入验证码'
            return false

        $.post _login_form.prop( 'action' ), {
            account: _username_input.val()
            password: _password_input.val()
            captcha: _captcha_input.val()
        }, ( response ) ->
            if response.errCode is "0"
                alert '登陆成功'
                window.location.href = '/admin/official/resource/manage'
            else
                alert response.message

        return false