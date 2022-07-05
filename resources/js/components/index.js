

export default class MinHeap{
    constructor(){
        this.storage = [];
        this.size = 0;
    }

    getLeftChildIndex(index){               // [0 , 2 ,3, 7 ,9 ,20] --> 0 -> 0 | 2 -> 1 | 3 -> 2 ---> 6 === 7  
        return 2 * index + 1;             //                                                      index(5)  index(6) index(7)
    }

    getRightChildIndex(index){
        return 2 * index + 2;
    }
    
    getParentIndex(index){
        return Math.floor((index - 1) / 2)
    }

    hasLeftChild(index){
        return this.getLeftChildIndex(index) < this.size;
    }

    hasRightChild(index){
        return this.getRightChildIndex(index) < this.size;
    }

    hasParent(index){
        return this.getParentIndex(index) >= 0;
    }

    leftChild(index){
        return this.storage[this.getLeftChildIndex(index)].age;
    }

    rightChild(index){
        return this.storage[this.getRightChildIndex(index)].age;
    }

    parent(index){
        return this.storage[this.getParentIndex(index)].age;
    }

    isFull(){
        return this.size == this.capacity;
    }

    swap(index1,index2){
        let temp = this.storage[index1];
        this.storage[index1] = this.storage[index2];
        this.storage[index2] = temp;
    }

    // removeMin(){
    //     if(this.size == 0)
    //         throw new Error("Empty Heap");
    //     let data = this.storage[0];
    //     this.storage[0] = this.storage[this.size - 1];
    //     this.size -= 1;
    //     this.heapifyDown(0);
    //     return data
    // }

    // heapifyDown(index){
    //     let smallest = index;
    //     if(this.hasLeftChild(index) && this.storage[smallest].age > this.leftChild(index))
    //         smallest = this.getLeftChildIndex(index);
    //     if(this.hasRightChild(index) && this.storage[smallest].age > this.rightChild(index))
    //         smallest = this.getRightChildIndex(index);
    //     if(smallest != index){
    //         this.swap(index,smallest);
    //         this.heapifyDown(smallest);
    //     }
    // }   

    insert(data){
        this.storage[this.size] = data; 
        this.size += 1;
        this.heapifyUp(this.size - 1);
    }

    heapifyUp(index){
        if(this.hasParent(index) && this.parent(index) > this.storage[index].age){ 
            this.swap(index,this.getParentIndex(index));
            this.heapifyUp(this.getParentIndex(index));
        }
    }
}