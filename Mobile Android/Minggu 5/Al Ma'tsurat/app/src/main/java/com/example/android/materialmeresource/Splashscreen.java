package com.example.android.materialmeresource;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.os.Handler;

public class Splashscreen extends AppCompatActivity {
    private int waktu_loading=3000;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splashscreen);
        new Handler().postDelayed(new Runnable() {
            @Override
            public void run() {

                Intent home=new Intent(Splashscreen.this, MainActivity.class);
                startActivity(home);
                finish();

            }
        },waktu_loading);
    }
}