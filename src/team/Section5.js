import React, {useEffect} from 'react';
import AOS from 'aos';
import 'aos/dist/aos.css';
import Globe from './images/globe2.png';
const Five = ()=>{
    useEffect(()=>{
            AOS.init({duration: 2000})
    },[])
    return(
        <>
          <section className='Sec_five' id="five">
            <div id="third_container" className="container m-auto row">


            <div data-aos="fade-up-right" id="five_img" className="col-12 col-md-6 col-lg-lg-6 col-xl-6 third_img">
                     <a  href="https://youtube.com">
                    <img src={Globe} alt="third_sec_image"/> </a>                     
                </div>



                <div data-aos="fade-up-left" id="third_text" className="col-12 col-md-6 col-lg-lg-6 col-xl-6 third_text">
                    <h3>Product 2</h3>
                    <span id="wt"></span>
                    <div className="third_text_wrapper">
                   <p>
                   add text here add text here add text here add text here add text here 
add text here add text here add text here add text here add text here 
add text here add text here  add text here add text here add text here 
add text xz add text hereadd text here  

                   </p>
                        </div>
                </div>
             
            </div>
        </section>
        
        </>
    )
}
export default Five;