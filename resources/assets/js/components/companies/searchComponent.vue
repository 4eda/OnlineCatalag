<template>
  <header class="uk-box-shadow-large uk-background-muted header">
    <div class="uk-container">
        <nav uk-navbar>
            <div class="uk-navbar-left">
                <router-link :to="{name:'home'}"><img src="" alt=""></router-link>
            </div>
            <div class="uk-navbar-right">
                <div class="search">
                    <input class="search__input" type="text" v-model="keywords" placeholder="Поиск...">
                    <button class="search__button" type="submit">
                      <span uk-icon="icon:search">Поиск</span>
                    </button>
                </div>
                <div class="search__dropdown" v-if="searchArr.length">
                    <ul class="uk-list">
                        <li v-for="rec in searchArr" :key="rec.id" v-text="rec.name"></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
<div class="news-list" style="position:relative;z-index:100000;">
				
                
               
				
				<div class="block-text">
					<div class="cat_anime hid_ul">
						<div class="tit_sp"><h1>  Книги по категориям</h1></div>
						<ul class="ser">
							<li><a href=""><span>Все</span></a></li>
							<li><a href=""><span>Новинки</span></a></li>
							<li><a href=""><span>Драма</span></a></li>
							<li><a href=""><span>Ужасы</span></a></li>
							<li><a href="">Триллер</a></li> 
						</ul>
					</div>
				</div>
</div>
</header>
</template>

<script>
    import axios from 'axios';

    const debounce = function (f, ms) {
        let timer = null;
        return function (...args) {
            const onComplete = () => {
                f.apply(this, args);
                timer = null;
            }
            if (timer) {
                clearTimeout(timer);
            }
            timer = setTimeout(onComplete, ms);
        };
    }

    export default {
        data: function () {
            return {
                keywords: '',
                searchArr: []
            }
        },
        watch: {
            keywords(after, before) {
                this.FetchData();
            }
        },
        methods: {
            FetchData: debounce(function () {
                if(!this.keywords) return this.searchArr = []
                axios.get('/api/search', {
                        params: {
                            keywords: this.keywords
                        }
                    })
                    .then(res => {
                        this.searchArr = res.data
                    })
                    .catch(err => {

                    });
            }, 200)
        }
    }
</script>

<style scoped>
.news-list{
   padding:10px; margin:0 auto;width:960px;position:relative
}
.search{
    margin:0 auto;width:960px;position:relative
}
.ser{
    padding:10px;
}
</style>