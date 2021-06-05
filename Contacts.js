new Vue({
    el: '#demo',
    
    data: {
        comments: [
            {author: 'Eragon', content: 'Lorem ipsum *dolor* sit amet, ***consectetur*** adipisicing elit. Blanditiis architecto repellat unde possimus quaerat corporis assumenda eveniet illum facilis quas sed nobis est sint error expedita voluptas dolore tempora nostrum.'}
        ]
    },
    
    methods:{
        addComment: function (){
            if(this.author && this.comment){
                this.comments.push({author: this.author, content: this.comment})
            }else{
                alert('Fields Empty');
            }
        },
        
        removeComment: function (index){
            this.comments.remove(index);
        }
    },
    
    filters: {
        marked: marked
    }
})