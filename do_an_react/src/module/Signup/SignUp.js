import React, { Component } from 'react';
import SignUpForm from './SignUpForm';

class SignUp extends Component {
    render() {
        return (
            <div className="Signup_form">

                <div className ="background_form_map container">

                <div className="title_form">
                    Đăng ký 
                </div>

                    <div className="ban_do col-xs-12 col-md-6">
                        <SignUpForm />
                    </div>


                </div>
            </div>
        );
    }
}

export default SignUp;
