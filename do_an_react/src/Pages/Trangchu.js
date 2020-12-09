import React, { Component } from 'react';
import Slider from '../module/Slider/Slider';
import Content from '../module/Content/Content';
import Lastest from '../module/Lastest/Lastest';

class TrangChu extends Component {
    render() {
        return (
            <>
                <Slider />

                <Content />

                <Lastest />
            </>
        );
    }
}

export default TrangChu;