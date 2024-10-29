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

    // Penghapusan di awal list
    public void deleteAtBeginning() {
        if (head == null) {
            System.out.println("List kosong. Tidak ada yang bisa dihapus.");
            return;
        } else if (head.next == head) {
            head = null; // Hanya ada satu node
        } else {
            Node temp = head;
            while (temp.next != head) {
                temp = temp.next;
            }
            temp.next = head.next; // Node terakhir menunjuk ke node kedua
            head = head.next; // Update head
        }
        System.out.println("Node di awal dihapus.");
    }

    // Penghapusan di akhir list
    public void deleteAtEnd() {
        if (head == null) {
            System.out.println("List kosong. Tidak ada yang bisa dihapus.");
            return;
        } else if (head.next == head) {
            head = null; // Hanya ada satu node
        } else {
            Node temp = head;
            while (temp.next.next != head) {
                temp = temp.next;
            }
            temp.next = head; // Node kedua terakhir menunjuk ke head
        }
        System.out.println("Node di akhir dihapus.");
    }

    // Penghapusan setelah node tertentu
    public void deleteAfter(int afterData) {
        Node temp = head;
        if (temp == null) {
            System.out.println("List kosong. Tidak ada yang bisa dihapus.");
            return;
        }

        do {
            if (temp.data == afterData) {
                if (temp.next == head) {
                    System.out.println("Tidak ada node setelah " + afterData + " untuk dihapus.");
                    return;
                }
                temp.next = temp.next.next; // Hapus node setelah temp
                System.out.println("Node setelah " + afterData + " dihapus.");
                return;
            }
            temp = temp.next;
        } while (temp != head);
        
        System.out.println("Node dengan data " + afterData + " tidak ditemukan.");
    }

    // Menampilkan elemen dalam linked list
    public void display() {
        if (head == null) {
            System.out.println("List kosong.");
            return;
        }
        Node temp = head;
        do {
            System.out.print(temp.data + " ");
            temp = temp.next;
        } while (temp != head);
        System.out.println();
    }
}

public class Main {
    public static void main(String[] args) {
        CircularSinglyLinkedList list = new CircularSinglyLinkedList();
        
        // Menyisipkan elemen
        list.insertAtEnd(10);
        list.insertAtEnd(20);
        list.insertAtEnd(30);
        list.insertAtEnd(40);

        // Menampilkan list sebelum penghapusan
        System.out.print("Elemen dalam Circular Singly Linked List: ");
        list.display();
        
        // Menghapus elemen
        list.deleteAtBeginning(); // Menghapus di awal
        list.deleteAtEnd(); // Menghapus di akhir
        list.deleteAfter(20); // Menghapus setelah node dengan data 20
        
        // Menampilkan list setelah penghapusan
        System.out.print("Elemen dalam Circular Singly Linked List setelah penghapusan: ");
        list.display();
    }
}
