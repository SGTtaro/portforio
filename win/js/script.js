 new Vue({
            el: '#start_button',
            data: {
                currentTime: ''
            },
            methods: {
                updateTime() {
                    const now = new Date();
                    this.currentTime = now.toLocaleTimeString();
                }
            },
            created() {
                this.updateTime();
                setInterval(this.updateTime, 1000); // 1秒ごとに現在時刻を更新
            }
        });
        

