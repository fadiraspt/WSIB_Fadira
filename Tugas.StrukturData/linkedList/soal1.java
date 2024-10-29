class Node {
    int data;
    Node next;

    public Node(int data) {
        this.data = data;
        this.next = null;
    }
}

class CircularSinglyLinkedList {
    private Node head;

    // Menyisipkan elemen di awal list
    public void insertAtBeginning(int data) {
        Node newNode = new Node(data);
        if (head == null) {
            head = newNode;
            newNode.next = head; // Menjadikan list circular
        } else {
            Node temp = head;
            while (temp.next != head) {
                temp = temp.next;
            }
            temp.next = newNode;
            newNode.next = head;
            head = newNode; // Update head
        }
    }

    // Menyisipkan elemen di akhir list
    public void insertAtEnd(int data) {
        Node newNode = new Node(data);
        if (head == null) {
            head = newNode;
            newNode.next = head; // Menjadikan list circular
        } else {
            Node temp = head;
            while (temp.next != head) {
                temp = temp.next;
            }
            temp.next = newNode;
            newNode.next = head;
        }
    }

    // Menyisipkan elemen setelah node tertentu
    public void insertAfter(int afterData, int data) {
        Node temp = head;
        if (temp == null) {
            System.out.println("List kosong, tidak dapat menyisipkan setelah " + afterData);
            return;
        }
        
        do {
            if (temp.data == afterData) {
           
