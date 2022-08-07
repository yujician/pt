var vm = new Vue({
  el: '#app',
  data: {
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    errors: {
      name: [],
      email: [],
      password: [],
      password_confirmation: []
    }
  },
})

validator: function (type, max) {
  let name = []
  let email = []
  let password = []
  let password_confirmation = []
  let name-message = max + '文字以内で入力して下さい。'
  let email-message = 'メールアドレスの形式で入力して下さい。'
  let password-confirmation = 'パスワードが一致しません。'

  if (type === 'name') {
    if (this.name.length > max) {
      name.push(name-message);
    }
    this.errors.name = name
  } else if (type === 'email') {
    if (this.email.length > max) {
      email.push(email-message);
    }
    this.errors.email = email
    }
}