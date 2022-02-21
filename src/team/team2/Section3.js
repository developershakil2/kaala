import React, {useEffect} from 'react';
import AOS from 'aos';
import Img from '../images/shiv.jpeg';
import 'aos/dist/aos.css';
const Sec3 =()=>{
    useEffect(()=>{
    AOS.init()
    },[])

    return(
        <>
        <section id="third">
            <div id="third_container" className="container m-auto row">
                <div id="third_text" className="col-12 col-md-6 col-lg-lg-6 col-xl-6 third_text">
                    <a data-aos="fade-right"  style={{textDecoration:'none'}} href="https://no.linkedin.com/in/shivakumarmovva1979"><h3>Shivakumar Movva</h3></a>
                    <span id="wt"></span>
                    <div data-aos="fade-right" className="third_text_wrapper">
                         <p>  
</p>
                        </div>
                </div>
                <div data-aos="fade-left" id="third_im" className="col-12 col-md-6 col-lg-lg-6 col-xl-6 third_img">
                 <img  id="shiv"src={Img} alt="person"/>

                </div>
            </div>
        </section>
        
        </>
    )
}

export default Sec3;