import React from 'react';
import img1 from '../img/logo1.jfif';
export const BoddyMedioComponente = (props) => {
    return (
        <div className="grid banner">
            <div className='cell is-col-span-1 is-row-span-2'></div>
            <div className="title-container cell is-col-span-2 ">
                <h1  className="title is-2">Mi Banner</h1>
                <p>Este es un ejemplo de banner con contenido en el título a la derecha y una imagen a la izquierda.</p><br/>
                <input className='input is-info' type="email" placeholder="Correo electrónico" />&nbsp;&nbsp;
                <a className="button is-success orbitron-font" href="/"><strong>Suscribirse</strong></a>
            </div>
            <div className="image-container cell is-col-span-1 is-row-span-2">
                <img src={img1} alt="Banner" />
            </div>
            <div className='cell is-col-span-1 is-row-span-2'></div>

        </div>
    )
}
