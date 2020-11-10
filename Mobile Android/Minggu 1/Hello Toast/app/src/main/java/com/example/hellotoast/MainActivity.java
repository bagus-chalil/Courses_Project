package com.example.hellotoast;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.os.Bundle;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;


public class MainActivity extends AppCompatActivity {
    private int awal=0;
    private TextView Tampil;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        Tampil = (TextView) findViewById(R.id.tampil);
    }

    public void toast2 (View view) {
        awal++;
        if (Tampil != null)
            Tampil.setText(Integer.toString(awal));
    }

    public void toast1 (View view) {
        // Create a toast show it.
        Context context = getApplicationContext();
        Toast toast = Toast.makeText(context, getString(R.string.toast_message), Toast.LENGTH_LONG);
        toast.show();
    }
}