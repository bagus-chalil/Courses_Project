package com.example.luasdankeliling;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    public void btn_kubus(View view) {
        Intent next4=new Intent(this,kubus.class);
        startActivity(next4);
    }

    public void btn_lingkaran(View view) {
        Intent next3=new Intent(this,lingkaran.class);
        startActivity(next3);
    }

    public void btn_segitiga(View view) {
        Intent next2=new Intent(this,segitiga.class);
        startActivity(next2);
    }

    public void btn_persegi(View view) {
        Intent next1=new Intent(this,persegi.class);
        startActivity(next1);
    }
}