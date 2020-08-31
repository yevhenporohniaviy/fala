<template>
    <div class="header-navbar d-flex">
        <div class="col-12">
            <div class="row">
                <div class="col-12  primary-nav">

                    <div class="justify-content-center d-none d-lg-flex w-100">
                        <div class="nav-btn">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-instagram"></i>
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="locale">
                            EN
                        </div>
                        <ul class="header-nav">
                            <li v-for="title in titles" :key="title">{{ title }}</li>
                        </ul>
                    </div>
                    <div class="logo">
                        Logo
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    name: 'HeaderNav',
    data () {
      return {
        titles: [
          'Home',
          'About Us',
          'Our services',
          'Products',
          'Contact us',
          'News'
        ]
      }
    }
  }
</script>

<style lang="scss" scoped>
    .header-navbar {
        .primary-nav {
            background-color: #fff;
            display: flex;

            .logo {
                display: inline-block;
                font-size: 2rem;
                font-weight: 800;
            }

            .header-nav {
                display: flex;
                align-items: center;
                margin: 0;

                li {
                    display: inline-block;
                    padding: 0 20px;
                }
            }

            .locale {
                color: #ffffff;
                font-weight: 600;
                background-color: #868384;
                padding: 4px 15px;
                border-radius: 3px;
                display: flex;
                justify-content: center;
                align-items: center;
                align-self: center;
                height: fit-content;
            }

            .nav-btn {
                display: flex;
                justify-content: flex-start;

                .fa {
                    width: 30px;
                    display: flex;
                    justify-content: center;
                    align-item: center;
                    height: 30px;
                    margin: 5px;
                    font-size: 20px;
                    box-sizing: unset;
                    text-align: center;
                    border-radius: 50%;
                    align-items: center;
                    text-decoration: none;
                    color: #ffffff;
                    background-color: #868384;

                }
            }
        }

        .secondary-nav {
            background-color: #7f7f7f;

            .header-nav {
                li {
                    display: inline-block;
                    padding: 10px 30px;
                    font-weight: 600;
                    text-transform: uppercase;
                }
            }
        }
    }
</style>
