import React, { useState } from 'react';

const Logobanner = (props)=>{
    const [title_edit, SetTitleEdit] = useState(props.title_logo);

    // setTimeout(() => {
    //     SetTitleEdit(title_edit + ' đã sửa ');
    // })

    return (
        <div className="logo">
            <h1><a href="index.html">{title_edit}</a></h1>
        </div>
        );
};

export default Logobanner;
