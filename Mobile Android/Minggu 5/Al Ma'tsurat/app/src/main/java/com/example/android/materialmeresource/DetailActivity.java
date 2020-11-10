package com.example.android.materialmeresource;

import android.graphics.Color;
import android.graphics.drawable.Drawable;
import android.graphics.drawable.GradientDrawable;
import android.os.Bundle;
import androidx.core.content.ContextCompat;
import androidx.appcompat.app.AppCompatActivity;
import android.widget.ImageView;
import android.widget.TextView;

import com.bumptech.glide.Glide;

public class DetailActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_detail);

        TextView matsuratTitle = (TextView)findViewById(R.id.cardsTitle);
        ImageView MatsuratImage = (ImageView)findViewById(R.id.cadsImageDetail);

        Drawable drawable = ContextCompat.getDrawable
                (this,getIntent().getIntExtra(Matsurat.IMAGE_KEY, 0));

        GradientDrawable gradientDrawable = new GradientDrawable();
        gradientDrawable.setColor(Color.GRAY);

        if(drawable!=null) {
            gradientDrawable.setSize(drawable.getIntrinsicWidth(), drawable.getIntrinsicHeight());
        }

        matsuratTitle.setText(getIntent().getStringExtra(Matsurat.TITLE_KEY));

        Glide.with(this).load(getIntent().getIntExtra(Matsurat.IMAGE_KEY,0))
                .placeholder(gradientDrawable).into(MatsuratImage);
    }
}
