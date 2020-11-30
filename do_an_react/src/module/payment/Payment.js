import React, { Component } from 'react';
import PaymentForm from './PaymentForm';

class Payment extends Component {
    render() {
        return (
            <div className="Payment_form">

            <div className ="background_form_map container">

            <div className="title_form">
                Thanh Toán
            </div>

            <div className="Content ">
                    <PaymentForm />
            </div>


            </div>
        </div>
        );
    }
}

export default Payment;
