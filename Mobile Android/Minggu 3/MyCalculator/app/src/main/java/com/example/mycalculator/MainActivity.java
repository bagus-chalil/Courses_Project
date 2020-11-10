package com.example.mycalculator;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;


public class MainActivity extends AppCompatActivity {

    Button zero,one,two,three,four,five,six,seven,eight,nine,add,multi,min,div,equal,del;
    private EditText hasil;
    private Character opr='s';
    private String operasi="";
    private float i,n1,n2;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        hasil = (EditText)findViewById(R.id.tampil_angka);

    }

    public void btn_seven(View view) {
        insert(7);
    }

    public void btn_four(View view) {
        insert(4);
    }

    public void btn_one(View view) {
        insert(1);
    }

    public void btn_zero(View view) {
        insert(0);
    }

    public void btn_eight(View view) {
        insert(8);
    }

    public void btn_five(View view) {
        insert(5);
    }

    public void btn_two(View view) {
        insert(2);
    }

    public void btn_nine(View view) {
        insert(9);
    }

    public void btn_six(View view) {
        insert(6);
    }

    public void btn_three(View view) {
        insert(3);
    }

    public void btn_del(View view) {
        reset();
    }

    public void btn_add(View view) {
        rumus();
        opr='+';
    }

    public void btn_min(View view) {
        rumus();
        opr='-';
    }

    public void btn_multi(View view) {
        rumus();
        opr='*';
    }

    public void btn_div(View view) {
        rumus();
        opr='/';
    }

    public void btn_equal(View view) {
        hitung();
    }

    private void insert(int i) {
        operasi=operasi+Integer.toString(i);
        n1=Integer.valueOf(operasi).intValue();
        hasil.setText(operasi);
    }

    private void reset() {
        operasi="";
        opr='s';
        n1=0;
        n2=0;
        hasil.setText("");
    }

    private void rumus() {
        operasi="";
        hitungNoShow();
        n2=n1;
    }

    private void hitung(){
        if (opr =='+')
            n1=n2+n1;
        else if (opr =='-')
            n1=n2-n1;
        else if (opr =='*')
            n1=n2*n1;
        else if (opr =='/')
            n1=n2/n1;
        hasil.setText(""+n1);
    }

    private void hitungNoShow() {
        if (opr =='+')
            n1=n2+n1;
        else if (opr =='-')
            n1=n2-n1;
        else if (opr =='*')
            n1=n2*n1;
        else if (opr =='/')
            n1=n2/n1;
    }
}