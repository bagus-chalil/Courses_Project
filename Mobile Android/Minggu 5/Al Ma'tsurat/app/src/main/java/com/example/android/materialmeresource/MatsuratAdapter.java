package com.example.android.materialmeresource;

import androidx.recyclerview.widget.RecyclerView;
import android.content.Context;
import android.content.Intent;
import android.graphics.Color;
import android.graphics.drawable.Drawable;
import android.graphics.drawable.GradientDrawable;
import androidx.core.content.ContextCompat;
import androidx.recyclerview.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import com.bumptech.glide.Glide;

import java.util.ArrayList;

public class MatsuratAdapter extends RecyclerView.Adapter<MatsuratAdapter.MatsuratViewHolder> {

    private GradientDrawable mGradientDrawable;
    private ArrayList<Matsurat> mMatsuratData;
    private Context mContext;

    MatsuratAdapter(Context context, ArrayList<Matsurat> matsuratData) {
        this.mMatsuratData = matsuratData;
        this.mContext = context;

        mGradientDrawable = new GradientDrawable();
        mGradientDrawable.setColor(Color.GRAY);

        Drawable drawable = ContextCompat.getDrawable
                (mContext,R.drawable.a);
        if(drawable != null) {
            mGradientDrawable.setSize(drawable.getIntrinsicWidth(), drawable.getIntrinsicHeight());
        }
    }

    @Override
    public MatsuratAdapter.MatsuratViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        return new MatsuratAdapter.MatsuratViewHolder(mContext, LayoutInflater.from(mContext).inflate(R.layout.list_item, parent, false), mGradientDrawable);
    }

    @Override
    public void onBindViewHolder(MatsuratAdapter.MatsuratViewHolder holder, int position) {

        Matsurat currentMatsurat = mMatsuratData.get(position);

        holder.bindTo(currentMatsurat);

    }

    @Override
    public int getItemCount() {

        return mMatsuratData.size();
    }

    static class MatsuratViewHolder extends RecyclerView.ViewHolder
            implements View.OnClickListener {

        private TextView sTitleText;
        private ImageView sMatsuratImage;
        private Context sContext;
        private Matsurat sCurrentMatsurat;
        private GradientDrawable sGradientDrawable;

        MatsuratViewHolder(Context context, View itemView, GradientDrawable gradientDrawable) {
            super(itemView);

            sTitleText = (TextView)itemView.findViewById(R.id.title);
            sMatsuratImage = (ImageView)itemView.findViewById(R.id.matsuratImage);

            sContext = context;
            sGradientDrawable = gradientDrawable;

            itemView.setOnClickListener(this);
        }

        void bindTo(Matsurat currentMatsurat){

            sTitleText.setText(currentMatsurat.getTitle());

            //Get the current sport
            sCurrentMatsurat = currentMatsurat;

            //Load the images into the ImageView using the Glide library
            Glide.with(sContext).load(currentMatsurat.
                    getImageResource()).placeholder(sGradientDrawable).into(sMatsuratImage);
        }

        @Override
        public void onClick(View view) {

            //Set up the detail intent
            Intent detailIntent = Matsurat.starter(sContext, sCurrentMatsurat.getTitle(),
                    sCurrentMatsurat.getImageResource());

            //Start the detail activity
            sContext.startActivity(detailIntent);
        }
    }
}
